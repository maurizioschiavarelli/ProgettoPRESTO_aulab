<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index(){
        $article_to_check = Article::where('is_accepted', null)->first();
        return view('revisor.index', compact('article_to_check'));

    }
    
    public function show(){
       $articles= Article::where('is_accepted', "!=", null)->get();
       return view('revisor.show', compact('articles'));
    }
    public function articleToCheck(Article $article){
        $article_to_check=$article;
        return view('revisor.index', compact('article_to_check'));
    }

    public function accept(Article $article)
    {
        $article->setAccepted(true);
        return redirect()->back()->with('message_accepted',"Hai accettato l'annuncio $article->title");
    }

    public function reject(Article $article)
    {
        $article->setAccepted(false);
        return redirect()->back()->with('message_rejected',"Hai rifiutato l'annuncio $article->title");
       
    }
    public function review(Article $article){
        $article->setAccepted(null);
        return redirect('/revisor/index'); 
        // ->back()->with('message_rejected',"Hai rifiutato l'articolo $article->title");

    }

    public function formRevisor() {
        $user = Auth::user();
    
        if (!$user) {
            return redirect()->route('login')->with('message_rejected', 'Devi essere autenticato per diventare un revisore.');
        }
    
        if (!$user->is_revisor) {
            return view('revisor.form-become-revisor', compact('user'));
        } else {
            return redirect()->back()->with('message_rejected', 'Sei già un revisore');
        }
    }

    public function becomeRevisor(){
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->route('homepage')->with('message', __('ui.Diventa_revisore'));

    }
    public function makeRevisor(User $user)
   {
    Artisan::call('app:make-user-revisor',['email'=>$user->email]);
    return redirect()->back();
   } 
}

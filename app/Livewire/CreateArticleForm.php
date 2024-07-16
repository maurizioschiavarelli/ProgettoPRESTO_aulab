<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class CreateArticleForm extends Component
{
    use WithFileUploads;

    #[Validate('required', message:"Il titolo è richiesto.")]
    #[Validate('min:5', message:"Il titolo è troppo corto.")]
    public $title;

    #[Validate('required', message:"La descrizione è richiesta.")]
    #[Validate('min:10', message: "La descrizione è troppo corta.")]
    public $description;

    #[Validate('required', message: "Il prezzo è richiesto.")]
    #[Validate('numeric', message:"Il prezzo va separato con il punto.")]
    public $price;

    #[Validate('required', message: "Selezionare almeno una categoria.")]
    public $category;

    public $article;

    public $images = [];
    public $temporary_images;

    public function store(){
        $this->validate();
        $this->article = Article::create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'category_id'=>$this->category,
            'user_id'=>Auth::id(),


        ]);

        if (count($this->images) > 0){
            foreach ($this->images as $image) {
                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create(['path' => $image->store($newFileName, 'public')]);
                RemoveFaces::withChain([
                        new ResizeImage($newImage->path, 400, 400),
                        new GoogleVisionSafeSearch($newImage->id),
                        new GoogleVisionLabelImage($newImage->id)
                    ])->dispatch($newImage->id);
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

        session()->flash('success', __('ui.Creazione_articolo'));
        $this->cleanForm();

        $this->reset();
        session()->flash('success',__('ui.Creazione_articolo'));

    }


    public function render()
    {
        return view('livewire.create-article-form');
    }

    public function updatedTemporaryImages()
    {
        if ($this -> validate([
            'temporary_images.*'=> 'image|max:1024',
            'temporary_images'=> 'max:6'
        ])){
            foreach($this->temporary_images as $image){
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    protected function cleanForm(){
        $this->title = '';
        $this->description = '';
        $this->category = '';
        $this->price = '';
        $this->images = [];

    }

}
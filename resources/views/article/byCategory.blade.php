<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12 pt-5 ">
                <h1 class="diplay-2">{{__('ui.Annunci_categoria')}}<span class="fw-bold">{{$category->name}}</span></h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center py-5">
            @forelse($articles as $article)
             <div class="col-12 col-md-6 col-xl-6 col-xxl-4">
                <x-card :article="$article"/>
             </div>
            @empty
            <div class="col-12 text-center">
               <h3>{{__('ui.No_annunci_categoria')}}</h3>
               @auth
                <a class="btn btn-dark my-5" href="{{route('create.article')}}">{{__('ui.Pubblica_articolo')}}</a>
                @endauth
            </div>
             @endforelse
        </div>
     </div>
</x-layout>



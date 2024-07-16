  <div class="card mx-auto shadow text-center mb-3 cardMorph-inner">
    <img src="{{$article->images->isNotEmpty() ? $article->images->first()->getUrl(400, 400) : 'https://picsum.photos/400'}}"
      class="card-img-top rounded-4 px-2 py-2" alt="Cover dell'articolo {{$article->title}}">
    <div class="card-body"><h3>{{Str::limit($article->title, 25)}}</h3>
        <h5 class="card-subtitle text-body-secondary mb-2">{{__('ui.Prezzo')}}: {{$article->price}} €</h5>
        <a href="{{route('byCategory', ['category'=> $article->category->id])}}" class="text-secondary text-decoration-none mt-3"><i class="bi bi-tag"></i> {{__('ui.'. $article->category->name)}}</a>
        <div class="d-flex flex-column justify-content-evenly align-items-center mt-3">
            <a href="{{route('article.show',compact('article'))}}" class="text-decoration-none">
              <button class="buttonCustomPrimary">
                {{__('ui.Mostra')}}
              </button>
            </a>
            
            {{-- <a href="{{route('byCategory', ['category'=> $article->category->id])}}" class="buttonCustomInfo mt-2 text-decoration-none">{{__('ui.'. $article->category->name)}}</a> --}}
        </div>
    </div>
</div>

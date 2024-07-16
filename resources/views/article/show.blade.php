<x-layout>

  <div class="row justify-content-center align-items-center text-center">
      <div class="col-12">
                @if(session('message_rejected'))
                    <span class="alert alert-danger" role="alert">
                        {{session('message_rejected')}}
                    </span>
                @endif

          <h1 class="display-4 mt-4">{{__('ui.Dett_articolo')}} {{ $article->title }}</h1>
      </div>
  </div>
  <div class="container cardMorph-inner mt-4">
  <div class="row justify-content-center py-4">
      <div class="col-12 col-lg-6">
        @if($article->images->count() > 0)
         <div id="carouselExample" class="carousel slide carousel-custom ms-2">
              <div class="carousel-inner">
                @foreach($article->images as $key => $image)
                  <div class="carousel-item @if($loop->first) active @endif">
                      <img src="{{ $image->getUrl(400, 400) }}" class="d-block w-100 rounded-4" alt="Immagine {{$key + 1}} dell'articolo {{$article->title}}">
                  </div>
                @endforeach
              </div>
               @if($article->images->count() > 1)
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
               </button>
              @endif
          </div>
              @else
               <img src="https://picsum.photos/400" alt="Nessuna foto inserita dall'utente" class="rounded-4">
              @endif
      </div>

  <div class="col-12 col-md-6 mb-3 d-flex flex-column justify-content-center align-items-center">
      <div class="text-center">
          <h2 class="display-5 mt-4 mt-lg-0"><span class="fw-bold">{{__('ui.Titolo')}}: </span>{{ $article->title }}</h2>
          <h3 class="fw-bold">{{__('ui.Prezzo')}}: {{ $article->price }} €</h3>
          <h4 class="fw-bold">{{__('ui.Descrizione')}}:</h4>
          <h5>{{ $article->description }}</h5>
      </div>
  </div>
</div>
</div>
</x-layout>





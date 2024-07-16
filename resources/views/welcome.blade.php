<x-layout>
        <section class="hero rounded-4 py-5">
            <div class="row">
            <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center text-center">

                <p >{{__('ui.hello')}} </p>

            </div>
            <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center text-center">
                <h2>{{env('APP_NAME')}}</h2>
            </div>

            @auth
               <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center text-center">
                <a href="{{route('create.article')}}" class="buttonHero px-5 text-decoration-none" >{{__('ui.Inserisci annuncio')}}
                    <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                    <path clip-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" fill-rule="evenodd"></path>
                    </svg>
                </button></a>
               </div>
            @else
            <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center text-center">
                <a href="{{route('register')}}" class="buttonHero buttonAccedi px-5 text-decoration-none" >{{__('ui.Registrati')}}
                    <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                    <path clip-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" fill-rule="evenodd"></path>
                    </svg>
                </button></a>
            </div>
        </div>

            @endauth

            <div class="waves"></div>
        </section>
    <div class="container-fluid text-center">
        <div class="row justify-content-center align-items-center">
            @if(session()->has('message'))
             <div class="alert alert-success text-center shadow rounded w-50 mt-5" role="alert">
                {{session('message')}}
             </div>
            @endif
            @if(session()->has('errorMessage'))
             <div class="alert alert-danger text-center shadow rounded w-50" role="alert">
                {{session('errorMessage')}}
              </div>
            @endif
        {{-- <div class="col-10">

                <h1 class="display-1">{{env('APP_NAME')}}</h1>
                <div class="d-flex justify-content-center my-3 mb-5">
                    @auth
                        <a class="buttonCustomPrimary text-decoration-none" href="{{route('create.article')}}">{{__('ui.Inserisci annuncio')}}</a>
                    @endauth
                </div>
            </div> --}}
        </div>
        <div class="row justify-content-center align-items-center pt-5">
            @if(session('message_rejected'))
                <span class="alert alert-danger" role="alert">
                    {{session('message_rejected')}}
                </span>
            @endif

        @forelse($articles as $article)
            <div class="col-12 col-md-6 col-xl-4">
                <x-card :article="$article" />
            </div>
        @empty
            <div class="col-12">
                <h3 class="text-center">{{__('ui.Annunci_non')}}</h3>
            </div>
        @endforelse
        </div>
    </div>

</x-layout>

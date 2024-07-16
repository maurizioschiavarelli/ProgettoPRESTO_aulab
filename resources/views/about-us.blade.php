<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold">{{__('ui.Chi_siamo')}}</h1>
                <p class="lead mt-4">{{__('ui.Benvenuto_chi_siamo')}}</p>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6 text-center">
                <h2 class="h3 fw-bold">{{__('ui.Missione_chi_siamo')}}</h2>
                <p class="lead mt-3">{{__('ui.Missione_paragrafo')}}</p>
            </div>
            <div class="col-12 col-md-6 text-center">
                <h2 class="h3 fw-bold">{{__('ui.Impegno_chi_siamo')}}</h2>
                <p class="lead mt-3">{{__('ui.Impegno_paragrafo')}}</p>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-12 text-center">
                @if(Auth::check() && !Auth::user())
                <h2 class="h3 fw-bold">{{__('ui.Unisciti_chi_siamo')}}</h2>
                <p class="lead mt-3">{{__('ui.Unisciti_paragrafo')}}</p>
                <div class="d-flex justify-content-center align-items-center">
                <a href="{{route('register')}}" class="buttonCustomPrimary my-4 text-decoration-none">{{__('ui.Registrati')}}</a>
                </div>
                @elseif(!Auth::check())
                <h2 class="h3 fw-bold">{{__('ui.Unisciti_chi_siamo')}}</h2>
                <p class="lead mt-3">{{__('ui.Unisciti_paragrafo')}}</p>
                <div class="d-flex justify-content-center align-items-center">
                <a href="{{route('register')}}" class="buttonCustomPrimary my-4 text-decoration-none">{{__('ui.Registrati')}}</a>
                </div>
                @elseif(Auth::check() && Auth::user())
                <h2 class="h3 fw-bold">{{__('ui.Team_chi_siamo')}}</h2>
                <p class="lead mt-3">{{__('ui.Team_paragrafo')}}</p>
                <div class="d-flex justify-content-center align-items-center">
                <a href="{{route('create.article')}}" class="buttonCustomPrimary my-4 text-decoration-none">{{__('ui.Inserisci annuncio')}}</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>

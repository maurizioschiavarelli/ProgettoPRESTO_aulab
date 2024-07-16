<x-layout>
    <div class="container mt-5 cardMorph cardMorph-inner">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-4 mt-4">{{__('ui.Conferma_mail')}}</h1>
                @if (session('status') == 'verification-link-sent')
                    <div class="alert alert-success" role="alert">
                        {{__('ui.Email_di_verifica')}}
                    </div>
                @endif 
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="/email/verification-notification">
                    @csrf
                   
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="buttonCustomPrimary mb-4">{{__('ui.Conferma')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
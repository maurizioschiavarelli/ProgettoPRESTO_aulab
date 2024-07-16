<x-layout>
    <div class="container mt-5 cardMorph cardMorph-inner">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-4 mt-4">{{__('ui.Registrati')}}</h1>
                @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-8">
                <form method="POST" action="/register">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">{{__('ui.Nome')}}</label>
                        <input type="text" class="cardInputMorph form-control" name="name" value="{{old('name')}}">
                        @error('name')
                            <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">{{__('ui.Cognome')}}</label>
                        <input type="text" class="cardInputMorph form-control" name="surname" value="{{old('surname')}}">
                        @error('surname')
                            <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">{{__('ui.Indirizzo_email')}}</label>
                        <input type="email" class="cardInputMorph form-control" name="email" value="{{old('email')}}">
                        @error('email')
                            <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">{{__('ui.Password')}}</label>
                        <input type="password" class="cardInputMorph form-control" name="password">
                        @error('password')
                            <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">{{__('ui.Conferma_password')}}</label>
                        <input type="password" class="cardInputMorph form-control" name="password_confirmation">
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="buttonCustomPrimary mb-4">{{__('ui.Registrati')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>

<x-layout>
    <div class="container mt-5 cardMorph cardMorph-inner">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-4 mt-4">{{__('ui.Recupera_password')}}</h1>
                @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
                @endif 
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('password.email')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">{{__('ui.Indirizzo_email')}}</label>
                        <input type="email" class="cardInputMorph form-control" name="email" value="{{old('email')}}">
                        @error('email')
                            <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="buttonCustomPrimary mb-4">{{__('ui.Recupera_password')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
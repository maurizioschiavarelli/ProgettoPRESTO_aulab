<x-layout>
    
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12">
                @if(session('message_rejected'))
                    <span class="alert alert-danger" role="alert">
                        {{session('message_rejected')}}
                    </span>
                @endif

                <h1 class="display-1">{{__('ui.I_nostri')}}</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center py-5">
            @forelse($articles as $article)
                <div class="col-12 col-md-6 col-xl-6 col-xxl-4">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">{{__('ui.Annunci_non')}}</h3>
                </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div>
            {{$articles->links()}}
        </div>
    </div>
</x-layout>

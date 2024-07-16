<x-layout>
    <div class="container-fluid pt-5 d-flex justify-content-center flex-column">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">{{__('ui.Pubblica_articolo')}}</h1>
            </div>
        </div>
        <div class="container pt-5">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <livewire:create-article-form />
                </div>
            </div>
        </div>
    </div>
</x-layout>

@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

<form class="shadow rounded p-5 my-5 cardMorph-inner" wire:submit="store">
    <div class="mb-3">
        <label for="title" class="form-label">{{ __('ui.Titolo') }}</label>
        <input type="text" class="cardInputMorph form-control @error('title') is-invalid @enderror" id="title"
            wire:model.blur="title">
        @error('title')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">{{ __('ui.Descrizione') }}</label>
        <textarea id="description" cols="30" rows="10" class="cardInputMorph form-control @error('description') is-invalid @enderror"
            wire:model.blur="description"></textarea>
        @error('description')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="price">{{ __('ui.Prezzo') }}</label>
        <input type="text" class="cardInputMorph form-control @error('price') is-invalid @enderror" id="price"
            wire:model.blur="price">
        @error('price')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <select class="cardInputMorph form-control @error('category') is-invalid @enderror" id="category" wire:model.blur="category">
            <option label>{{ __('ui.Seleziona_categoria') }}</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <input type="file" wire:model.live="temporary_images" multiple
         class="form-control cardInputMorph shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img/">
        @error('temporary_images.*')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
        @error('temporary_images')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>

    @if(!empty($images))
        <div class="row">
            <div class="col-12">
                <p>Photo preview:</p>
                <div class="row border border-4 border-info rounded shadow py-4">
                    @foreach ($images as $key => $image)
                        <div class="col d-flex flex-column align-items-center my-3">
                            <div class="img-preview mx-auto shadow rounded"
                                 style="background-image: url({{ $image->temporaryUrl() }});">
                            </div>
                            <button type="button" class="buttonCustomDanger mt-1" wire:click="removeImage({{ $key }})">
                                    X
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <div class="d-flex justify-content-center pt-3">
        <button type="submit" class="buttonCustomPrimary">{{ __('ui.Crea') }}</button>
    </div>
</form>


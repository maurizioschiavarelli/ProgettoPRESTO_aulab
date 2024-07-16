{{-- <x-layout>

    <div class="container">
        <div class="row">
@foreach ($articles as $article)




        <div class="col-4">
        <x-card :article="$article"/>
            <form action="{{route('review',['article'=> $article])}}" method="POST">
                @csrf
                @method('PATCH')
            <button class="buttonCustomDanger py-2 px-5">Revisiona</button>
         </form>
        </div>
        @endforeach
     </div>
    </div>
</x-layout> --}}

<x-layout>


    <div class="row justify-content-center align-items-center text-center">
        @if (session()->has('succes'))
            <div class="alert alert-success" role="alert">
                {{ session('succes') }}
            </div>
        @endif
        @if(session('message_rejected'))
            <span class="alert alert-danger" role="alert">
                {{session('message_rejected')}}
            </span>
        @endif
        <div class="col-12">
            <h1 class="display-4 mb-4">{{__('ui.Lista_annunci')}}</h1>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-12 m-auto">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                {{-- <th scope="col">ID</th> --}}
                                <th scope="col">{{__('ui.Nome')}}</th>
                                {{-- <th scope="col">Descrizione</th> --}}
                                <th scope="col">Stato dell'annuncio</th>
                                <th scope="col">{{__('ui.Azioni')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    {{-- <th scope="row">{{ $article->id }}</th> --}}
                                    <td>{{Str::limit($article->title, 30)}}</td>
                                    {{-- <td>{{ Str::limit($article->description, 25) }}</td> --}}
                                    <td >
                                        @if($article->is_accepted)
                                            <span><i class="bi bi-check-circle text-success"></i></span>
                                        @else
                                            <span><i class="bi bi-x-circle xClass"></i></span>
                                        @endif
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <a href="{{ route('articleToCheck', $article) }}" class="text-decoration-none"><button type="submit"
                                                class="buttonCustomWarning me-1">{{__('ui.Revisiona')}}</button></a>




                                        {{-- <form method="POST" action="{{route('categories.destroy', $category)}}">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-outline-danger" onclick="alert('Sei sicuro di voler eliminare la categoria?)')">Elimina</button>
                    </form> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>

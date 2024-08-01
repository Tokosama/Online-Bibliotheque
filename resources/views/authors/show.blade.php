@extends('master')

@section('content')
    <div class="container fs-2" style="background-color: rgb(221, 224, 228) ; height:100vh;">
        <h1 class=" fw-bold py-5" style="font-size: 64px">Détails de l'auteur</h1>
        
        <div class="ms-5">
            <p><strong>Nom :</strong> {{ $author->name }}</p>
            <p><strong>Biographie :</strong> {{ $author->biography }}</p>
            <h3>Livres de l'auteur</h3>
            <ul class="ms-4">
                @foreach ($author->books as $book)
                    <li>{{ $book->title }} ({{ $book->published_year }})</li>
                @endforeach
            </ul>
            <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning my-4 ms-auto fs-4 px-3 py-2 ">Modifier</a>
            <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger my-4 ms-auto fs-4 px-3 py-2 r">Supprimer</button>
            </form>
        </div>
        
    </div>
@endsection

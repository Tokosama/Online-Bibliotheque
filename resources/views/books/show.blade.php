@extends('master')

@section('content')
    <div class="container" style="background-color: rgb(221, 224, 228); height:100vh">
        <h1 class=" fw-bold py-5" style="font-size: 64px">Détails du livre</h1>
        <div class="ms-5">
        <h4 class="my-3"><strong>Titre :</strong> {{ $book->title }}</h4>
        <h4 class="my-3"><strong>Auteur :</strong> {{ $book->author->name }}</h4>
        <h4 class="my-3"><strong>ISBN :</strong> {{ $book->isbn }}</h4>
        <h4 class="my-3"><strong>Année de publication :</strong> {{ $book->published_year }}</h4>
        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Modifier</a>
        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
        </div>
        
    </div>
@endsection

@extends('master')

@section('content')
    <div class="container ">
        
        <h1 class="text-center fw-bold mb-4" style="font-size: 64px">Liste des livres</h1>
        <a href="{{ route('books.create') }}" class=" btn btn-primary my-4 ms-auto fs-4 px-3 py-2">Ajouter un livre</a>
        <table class="table border">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>ISBN</th>
                    <th>Année de publication</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author->name }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->published_year }}</td>
                        <td>
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Modifier</a>
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-secondary">Détails</a>

                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $books->links('vendor.pagination.bootstrap-5') }}
    </div>
@endsection

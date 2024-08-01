@extends('master')

@section('content')
    <div class="container" >
        <h1 class="text-center fw-bold mb-4" style="font-size: 64px">Liste des auteurs</h1>
        <a href="{{ route('authors.create') }}"  class=" btn btn-primary my-4 ms-auto fs-4 px-3 py-2">Ajouter un auteur</a>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Biographie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                    <tr class="fs-3 fw-semibold table-group-divider">
                        <td>{{ $author->name }}</td>
                        <td class="fs-5">
                            <div class="biography-short" id="short-{{ $author->id }}">
                                {{ Str::limit($author->biography, 60) }}
                               
                            </div>
                            
                        </td>
                        <td>
                            <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning">Modifier</a>
                            <a href="{{ route('authors.show', $author->id) }}" class="btn btn-secondary">Détails</a>

                            <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <h4>Livres :</h4>
                            <ul>
                                @foreach ($author->books as $book)
                                    <li class="fs-4">{{ $book->title }} ({{ $book->published_year }})</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $authors->links('vendor.pagination.bootstrap-5') }}
    </div>
@endsection
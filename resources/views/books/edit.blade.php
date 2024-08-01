@extends('master')

@section('content')
    <div class="container">
        <h1>Modifier un livre</h1>
        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group  fs-2 fw-semibold mt-4">
                <label for="title">Titre</label>
                <input type="text" name="title" class="form-control fs-5" value="{{ $book->title }}" required>
            </div>
            <div class="form-group  fs-2 fw-semibold mt-4">
                <label for="author_id">Auteur</label>
                <select name="author_id" class="form-control fs-5" required>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}" {{ $author->id == $book->author_id ? 'selected' : '' }}>
                            {{ $author->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group  fs-2 fw-semibold mt-4">
                <label for="isbn">ISBN</label>
                <input type="text" name="isbn" class="form-control fs-5" value="{{ $book->isbn }}" required>
            </div>
            <div class="form-group  fs-2 fw-semibold mt-4">
                <label for="published_year">Année de publication</label>
                <input type="number" name="published_year" class="form-control fs-5" value="{{ $book->published_year }}" required>
            </div>
            <button type="submit" class="btn btn-primary my-4 ms-auto fs-4 px-3 py-2 ">Modifier</button>
        </form>
    </div>
@endsection

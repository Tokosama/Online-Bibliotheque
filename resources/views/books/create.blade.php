@extends('master')

@section('content')
    <div class="container">
        <h1 class="text-center fw-bold mb-4" style="font-size: 64px">Ajouter un livre</h1>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="form-group fs-2 fw-semibold mt-4">
                <label for="title">Titre</label>
                <input type="text" name="title" class="form-control fs-5" required>
            </div>
            <div class="form-group fs-2 fw-semibold mt-4">
                <label for="author_id">Auteur</label>
                <select name="author_id" class="form-control fs-5" required>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group fs-2 fw-semibold mt-4">
                <label for="isbn">ISBN</label>
                <input type="text" name="isbn" class="form-control fs-5" required>
            </div>
            <div class="form-group fs-2 fw-semibold mt-4">
                <label for="published_year">Année de publication</label>
                <input type="number" name="published_year" class="form-control fs-5" required>
            </div>
            <button type="submit" class=" btn btn-primary my-4 ms-auto fs-4 px-3 py-2 ">Ajouter</button>
        </form>
    </div>
@endsection

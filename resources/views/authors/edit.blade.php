@extends('master')

@section('content')
    <div class="container">
        <h1 class="text-center fw-bold mb-4" style="font-size: 64px">Modifier un auteur</h1>
        <form action="{{ route('authors.update', $author->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group fs-1 fw-semibold">
                <label  for="name">Nom</label>
                <input type="text" name="name" class="form-control fs-3" value="{{ $author->name }}" required>
            </div>
            <div class="form-group fs-1 fw-semibold">
                <label for="biography">Biographie</label>
                <textarea name="biography" class="form-control fs-3">{{ $author->biography }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary fs-3 mt-3 py-2 px-4">Modifier</button>
        </form>
    </div>
@endsection

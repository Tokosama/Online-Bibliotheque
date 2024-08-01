@extends('master')

@section('content')
    <div class="container">
        <h1 class="text-center fw-bold mb-4" style="font-size: 64px">Ajouter un auteur</h1>
        <form action="{{ route('authors.store') }}" method="POST">
            @csrf
            <div class="form-group  fs-1 fw-semibold">
                <label for="name">Nom</label>
                <input type="text" name="name" class="form-control  fs-3" required>
            </div>
            <div class=" form-group fs-1 fw-semibold">
                <label for="biography">Biographie</label>
                <textarea name="biography" class="form-control  fs-3"></textarea>
            </div>
            <button type="submit" class=" btn btn-primary my-4 ms-auto fs-4 px-3 py-2">Ajouter</button>
        </form>
    </div>
@endsection

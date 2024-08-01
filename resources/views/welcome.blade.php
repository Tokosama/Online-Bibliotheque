
@extends('master')

@section('content')
<div class="container">
    <div class="row text-center">
        <div class="col-12 fw-bold my-5" style="font-size:64px ">Bienvenue sur notre Bibliotheque de livres</div>
        <div class="col-6 border-end">        <a href="{{ route('books.index') }}"  class=" btn btn-primary my-4 ms-auto fs-3 px-5 py-3">Acceder aux livres</a>
        </div>
        <div class="col-6">        <a href="{{ route('authors.index') }}"  class=" btn btn-danger my-4 ms-auto fs-3 px-5 py-3">Acceder aux auteurs</a>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-5">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-fluid rounded shadow-lg comic-image">
        </div>
        <div class="col-md-7">
            <h1 class="mb-4 text-primary">{{ $comic['title'] }}</h1>
            <div class="bg-light p-4 rounded shadow-sm mb-4">
                <p class="mb-2"><strong class="text-primary">Serie:</strong> {{ $comic['series'] }}</p>
                <p class="mb-2"><strong class="text-primary">Tipo:</strong> {{ $comic['type'] }}</p>
                <p class="mb-2"><strong class="text-primary">Data di vendita:</strong> {{ $comic['sale_date'] }}</p>
                <p class="mb-0"><strong class="text-primary">Prezzo:</strong> <span class="badge bg-success">{{ $comic['price'] }}</span></p>
            </div>
            <p class="mb-4 lead">{{ $comic['description'] }}</p>
            <a href="{{ url('/') }}" class="btn btn-primary btn-lg">
                <i class="fas fa-arrow-left me-2"></i>Torna ai Fumetti
            </a>
        </div>
    </div>
</div>

@endsection

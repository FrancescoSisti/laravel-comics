@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <div class="jumbotron-content">
        <h1>DC COMICS</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
    </div>
</div>

<div class="container-fluid p-0">
    <div class="container position-relative py-5">
        <h2 class="text-white bg-primary p-3 position-absolute top-0 start-50 translate-middle" style="transform: translateY(-50%);">CURRENT SERIES</h2>

        <div class="row mt-5 pt-4">
            @foreach($comics as $index => $comic)
            <div class="col-md-2 mb-4">
                <a href="{{ url('/comic/' . $index) }}" class="text-decoration-none">
                    <div class="comic-card shadow">
                        <div class="comic-image-container">
                            <img src="{{ $comic['thumb'] }}" class="card-img-top comic-image" alt="{{ $comic['title'] }}">
                        </div>
                        <div class="card-body px-3 py-2 bg-light">
                            <h5 class="card-title text-primary mb-0">{{ $comic['series'] }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <button class="btn btn-primary px-5 py-2 fw-bold">LOAD MORE</button>
        </div>
    </div>

    <div class="bg-primary py-5 mt-5">
        <div class="container">
            <div class="row text-white align-items-center justify-content-between">
                <div class="col-md-2 d-flex align-items-center mb-3 mb-md-0">
                    <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="Digital Comics" class="me-3" style="height: 50px;">
                    <span class="fw-bold">DIGITAL COMICS</span>
                </div>
                <div class="col-md-2 d-flex align-items-center mb-3 mb-md-0">
                    <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="DC Merchandise" class="me-3" style="height: 50px;">
                    <span class="fw-bold">DC MERCHANDISE</span>
                </div>
                <div class="col-md-2 d-flex align-items-center mb-3 mb-md-0">
                    <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="Subscription" class="me-3" style="height: 50px;">
                    <span class="fw-bold">SUBSCRIPTION</span>
                </div>
                <div class="col-md-2 d-flex align-items-center mb-3 mb-md-0">
                    <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="Comic Shop Locator" class="me-3" style="height: 50px;">
                    <span class="fw-bold">COMIC SHOP LOCATOR</span>
                </div>
                <div class="col-md-2 d-flex align-items-center">
                    <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="DC Power Visa" class="me-3" style="height: 50px;">
                    <span class="fw-bold">DC POWER VISA</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

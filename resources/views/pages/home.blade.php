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
        <h2 class="text-white bg-primary p-2 position-absolute top-0 start-0" style="transform: translateY(-50%);">CURRENT SERIES</h2>

        <div class="row mt-5">
            @foreach($comics as $comic)
            <div class="col-md-2 mb-4">
                <div class="comic-card">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                    <div class="card-body px-0">
                        <h5 class="card-title">{{ $comic['series'] }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-4">
            <button class="btn btn-primary px-5">LOAD MORE</button>
        </div>
    </div>

    <div class="bg-primary py-5">
        <div class="container">
            <div class="row text-white align-items-center">
                <div class="col">
                    <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="Digital Comics" class="me-2" style="height: 40px;">
                    <span>DIGITAL COMICS</span>
                </div>
                <div class="col">
                    <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="DC Merchandise" class="me-2" style="height: 40px;">
                    <span>DC MERCHANDISE</span>
                </div>
                <div class="col">
                    <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="Subscription" class="me-2" style="height: 40px;">
                    <span>SUBSCRIPTION</span>
                </div>
                <div class="col">
                    <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="Comic Shop Locator" class="me-2" style="height: 40px;">
                    <span>COMIC SHOP LOCATOR</span>
                </div>
                <div class="col">
                    <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="DC Power Visa" class="me-2" style="height: 40px;">
                    <span>DC POWER VISA</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

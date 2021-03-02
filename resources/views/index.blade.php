@extends('layouts.staticapp')

@section('content')

<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="border-radius: 15px;">
            <div class="carousel-item active">
                <img src="{{ asset('img/banner.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/banner.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/banner.png') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="section2">
    <div class="container">
        <h3>What We Do</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore sit iusto veniam dolorem assumenda explicabo facilis dignissimos tempora tempore reiciendis. Iusto, necessitatibus facilis sequi vel quasi sunt blanditiis cum aliquam!</p>
    </div>
</div>

@endsection

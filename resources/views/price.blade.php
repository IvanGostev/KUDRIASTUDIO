@extends('layouts.app')
@section('content')
    <section class="price">
        <h1 class="price__title">Price</h1>
        <div class="product">
            <h2 class="product__title">WEDDING FULL</h2>
            <p class="product__text">
                Video recording up to <span>12 hours</span> Work of
                <span>2 operators</span> <br />
                Video editing <span> (10-20 minutes) Teaser 1-2 minutes</span><br />
                <span>Author's color correction </span> and
                <span>Sound design</span> <br />
                Drone (depending on weather conditions and location capabilities)
                Production time up to <span>2-3 months</span> <br />
                Additional hour <span>200 €</span>
            </p>
            <h3 class="product__price">2000 €</h3>
            <img src="{{ asset('img/WEDDINGFULL.png')}}" alt="" class="product__img" />
        </div>
        <div class="product">
            <h2 class="product__title">WEDDING MINI</h2>
            <p class="product__text">
                Video recording up to <span>12 hours</span> Work of
                <span>2 operators</span> <br />
                Video editing <span> (10-20 minutes) Teaser 1-2 minutes</span><br />
                <span>Author's color correction </span> and
                <span>Sound design</span> <br />
                Drone (depending on weather conditions and location capabilities)
                Production time up to <span>2-3 months</span> <br />
                Additional hour <span>200 €</span>
            </p>
            <h3 class="product__price">1000 €</h3>
            <img src="{{ asset('img/WEDDINGMINI.png')}}" alt="" class="product__img" />
        </div>
        <div class="product ">
            <p class="product__text extras">
                <span>+ TEASER FOR INSTAGRAM - 200 €</span> <br />
                <span>+ ARCHIVE FILM - 500 €</span> <br />
                <span>+ ADDITIONAL OPERATOR 12 HOURS - 400 €</span> <br />
                <span>+ ADDITIONAL DRONE OPERATOR - 250 €</span> <br />
                <span>+ ACCELERATED EDITION</span> - editing of a wedding video or
                film within a month from the date of filming 30% of the total cost
                of the package.
            </p>
        </div>
    </section>
@endsection

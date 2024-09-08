@extends('layouts.app')
@section('content')
    <section class="price">
        <h1 class="price__title">{{__('main.title-price')}}</h1>
        <div class="product">
            <h2 class="product__title">{{__('main.wf')}}</h2>
            <p class="product__text">
                {!! __('main.wf-desc') !!}
            </p>
            <h3 class="product__price">2000 €</h3>
            <img src="{{ asset('img/WEDDINGFULL.png')}}" alt="" class="product__img" />
        </div>
        <div class="product">
            <h2 class="product__title">{{__('main.wm')}}</h2>
            <p class="product__text">
                {!! __('main.wm-desc') !!}
            </p>
            <h3 class="product__price">1000 €</h3>
            <img src="{{ asset('img/WEDDINGMINI.png')}}" alt="" class="product__img" />
        </div>
        <div class="product ">
            <p class="product__text extras">
                {!! __('main.product') !!}
            </p>
        </div>
    </section>
@endsection

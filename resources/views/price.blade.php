@extends('layouts.app')
@section('content')
    <section class="price">
        <h2 class="price__title">{{__('main.title-price')}}</h2>
        <div class="product">
            <h2 class="product__title">{{__('main.wf')}}</h2>
            <h6 class="product__text">
                {!! __('main.wf-desc') !!}
            </h6>
            <h3 class="product__price">2000 €</h3>
            <img src="{{ asset('img/WEDDINGFULL.png')}}" alt="" class="product__img" />
        </div>
        <div class="product">
            <h2 class="product__title">{{__('main.wm')}}</h2>
            <h6 class="product__text">
                {!! __('main.wm-desc') !!}
            </h6>
            <h3 class="product__price">1000 €</h3>
            <img src="{{ asset('img/WEDDINGMINI.png')}}" alt="" class="product__img" />
        </div>
        <div class="product ">
            <h6 class="product__text extras">
                {!! __('main.product') !!}
            </h6>
        </div>
    </section>
@endsection

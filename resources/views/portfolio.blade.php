@extends('layouts.app')
@section('content')
    <section class="title">
        <h1>Portfolio</h1>
    </section>
    <section class="porfolio">
        <div class="portfolio__top">
            <img src="{{ asset('storage/' . $workMain->src)}}" alt="{{$workMain->src}}">
        </div>
        <div class="portfolio__bottom">
            @foreach($works as $work)
                <div class="portfolio__img">
                    <img src="{{ asset('storage/' . $work->src)}}" alt="{{$work->src}}">
                </div>
            @endforeach


        </div>
    </section>
@endsection

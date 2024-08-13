@extends('layouts.app')
@section('content')
    <section class="title">
        <h1>Portfolio</h1>
    </section>
    <section class="porfolio">
        <div class="portfolio__top">
            @if($workMain->url)
                <iframe src="{{$workMain->url}}" width="100%"  height="100%" frameborder="0" allow="autoplay; fullscreen"
                        allowfullscreen></iframe>
            @else
                <video width="100%"  height="100%" controls>
                    <source src="{{ asset('storage/' . $workMain->src)}}" type="video/mp4">
                </video>
            @endif

        </div>
        <div class="portfolio__bottom">
            @foreach($works as $work)
                <div class="portfolio__img">
                    @if($work->url)
                        <iframe src="{{$work->url}}" width="100%" frameborder="0" allow="autoplay; fullscreen"
                                allowfullscreen></iframe>
                    @else
                        <video width="100%" controls>
                            <source src="{{ asset('storage/' . $work->src)}}" type="video/mp4">
                        </video>
                    @endif
                </div>
            @endforeach


        </div>
    </section>
@endsection

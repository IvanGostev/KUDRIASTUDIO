@extends('layouts.app')
@section('content')
    <section class="title">
        <h2>{{__('main.title-portfolio')}}</h2>
    </section>
    <section class="porfolio">
        @foreach($works as $work)
            <div class="portfolio__top" style="position: relative">
                @if($work->url)
                    <div style="padding:44.27% 0 0 0;position:relative;">
                        <iframe src="{{$work->url}}?title=0&byline=0&portrait=0"
                                style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"
                                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                        @if($work->description)
                            <br>
                            <br>
                            <div class="form-group">
                                <p>
                                    {{$work->description}}
                                </p>
                            </div>
                            <br>
                        @endif
                    </div>
                @else
                    <video width="100%" controls>
                        <source src="{{ asset('storage/' . $work->src)}}" type="video/mp4">
                    </video>
                    @if($work->description)
                        <br>
                        <br>
                        <div class="form-group">
                            <p>
                                {{$work->description}}
                            </p>
                        </div>
                        <br>
                    @endif
                @endif
            </div>
        @endforeach
    </section>
@endsection

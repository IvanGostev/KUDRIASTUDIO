@extends('layouts.app')
@section('content')
    <section class="title">
        <h1>Eco-Friendly Weddings</h1>
    </section>
    <section class="single-post">
        <div class="single-post__content">
           {!! $post->content !!}
        </div>
    </section>

    <section class="title title-recommendations">
        <h1>Recommendations</h1>
    </section>
    <section class="recommendations">
        @foreach($posts as $postRec)
        <a class="recommendation-post post" href="{{route('post.show', ['post' => $post->id, 'slug' => $post->slug])}}">
            <h6>{{$postRec->title}}</h6>
            <img src="{{ asset('storage/' . $postRec->img)}}" alt="" />
        </a>
        @endforeach
    </section>
@endsection
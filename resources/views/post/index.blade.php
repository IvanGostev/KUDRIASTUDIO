@extends('layouts.app')
@section('content')
    <section class="title">
        <h1>Blog</h1>
    </section>
    <section class="posts">
        @foreach($posts as $post)
            <a class="post" href="{{route('post.show', ['post' => $post->id, 'slug' => $post->slug])}}">
                <h2 class="post__title">{{$post->title}}</h2>
                <div class="post__text">
                   {{$post->about}}
                </div>
            </a>
        @endforeach
    </section>
    <section class="pagination">
        {{$posts->links()}}
    </section>
@endsection

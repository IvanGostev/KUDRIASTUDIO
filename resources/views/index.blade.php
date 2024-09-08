@extends('layouts.app')
@section('content')
<section class="main-img">
    <div class="img-box">
        <div class="fadein">
            <img id="f3" src="{{asset('img/k/3.png')}}">
            <img id="f2" src="{{asset('img/k/2.png')}}">
            <img id="f1" src="{{asset('img/k/1.png')}}">
        </div>
    </div>
</section>
<section class="main">
    <h1 class="main__title">{{__('main.hello')}}</h1>
    <div class="main__content">
        <p class="main__text">
            {{__('main.text-1')}}
            <br />
            <br />
            {{__('main.text-2')}}
        </p>
    </div>
    <div class="main__posts">
        @foreach($posts as $postActive)
            <a class="post" href="{{route('post.show', ['post' => $postActive->id, 'slug' => $postActive->slug])}}">
                <h2 class="post__title">{{$postActive->title}}</h2>
                <div class="post__text">
                    {{$postActive->about}}
                </div>
            </a>
        @endforeach
    </div>
</section>
@endsection

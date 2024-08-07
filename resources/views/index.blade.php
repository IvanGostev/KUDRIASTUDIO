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
    <h1 class="main__title">Hello! We are Alisa and Sam.</h1>
    <div class="main__content">
        <p class="main__text">
            We shoot weddings and love stories. Kudrya is a real surname. We are
            the leaders of KUDRIASTUDIO. It was not by chance that we came to
            our style. We are inspired by cinema, old Hollywood films, TV
            series, beautiful perfume advertisements. We love filming a
            production: working with light, with people. But we also love to
            observe emotions, atmosphere and try to emphasize all this with good
            musical accompaniment. Honesty and openness are very important to
            us, the desire to create something special that others don’t even
            know about. Our clients are passionate intellectuals with a
            developed sense of taste and style.
            <br />
            <br />
            We can say that we have no competitors. We do not look at the work
            of other specialists. We do not work at the client's direction. At
            every meeting, we look at our clients from a dramatic perspective,
            thinking about what to reflect in the film - a light touch, a gentle
            or ironic look, a ray of sunshine in the bride’s hair or a glass of
            champagne in her hand. Every little detail is important, this is how
            the atmosphere and mood of the wedding film are born.
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

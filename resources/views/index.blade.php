@extends('layouts.app')
@section('content')
    <style>
        @import url(//cdn.rawgit.com/rtaibah/dubai-font-cdn/master/dubai-font.css);


        .testim {
            width: 100%;
            position: relative;
            top: 50%;
       border-bottom: 3px solid black;

        }

        .testim .wrap {
            position: relative;
            width: 100%;
            max-width: 1020px;
            padding: 40px 20px;
            margin: auto;
        }

        .testim .arrow {
            display: block;
            position: absolute;
            color: black;
            cursor: pointer;
            font-size: 2em;
            top: 50%;
            padding: 5px;
            z-index: 22222222;
        }

        .testim .arrow:before {
            cursor: pointer;
        }

        .testim .arrow:hover {
            color: lightgray;
        }


        .testim .arrow.left {
            left: 10px;
        }

        .testim .arrow.right {
            right: 10px;
        }

        .testim .dots {
            text-align: center;
            position: absolute;
            width: 100%;
            bottom: 60px;
            left: 0;
            display: block;
            z-index: 3333;
            height: 12px;
        }

        .testim .dots .dot {
            list-style-type: none;
            display: inline-block;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            border: 1px solid black;
            margin: 0 10px;
            cursor: pointer;
            position: relative;
        }

        .testim .dots .dot.active,
        .testim .dots .dot:hover {
            background: black;
            border-color: black;
        }



        .testim .cont {
            position: relative;
            overflow: hidden;
        }

        .testim .cont > div {
            text-align: center;
            position: absolute;
            top: 0;
            left: 0;
            padding: 0 0 70px 0;
            opacity: 0;
        }

        .testim .cont > div.inactive {
            opacity: 1;
        }


        .testim .cont > div.active {
            position: relative;
            opacity: 1;
        }


        .testim .cont div .img img {
            display: block;
            width: 100px;
            height: 100px;
            margin: auto;
            border-radius: 50%;
        }

        .testim .cont div h2 {
            color: black;
            font-size: 1em;
            margin: 15px 0;
        }

        .testim .cont div p {
            font-size: 1.15em;
            color: black;
            width: 80%;
            margin: auto;
        }


        .testim .cont div.active p {
            -webkit-animation: testim-content-in .5s ease-in-out forwards;
            -moz-animation: testim-content-in .5s ease-in-out forwards;
            -ms-animation: testim-content-in .5s ease-in-out forwards;
            -o-animation: testim-content-in .5s ease-in-out forwards;
            animation: testim-content-in .5s ease-in-out forwards;
        }

        .testim .cont div.inactive .img img {
            -webkit-animation: testim-hide .5s ease-in-out forwards;
            -moz-animation: testim-hide .5s ease-in-out forwards;
            -ms-animation: testim-hide .5s ease-in-out forwards;
            -o-animation: testim-hide .5s ease-in-out forwards;
            animation: testim-hide .5s ease-in-out forwards;
        }

        .testim .cont div.inactive h2 {
            -webkit-animation: testim-content-out .4s ease-in-out forwards;
            -moz-animation: testim-content-out .4s ease-in-out forwards;
            -ms-animation: testim-content-out .4s ease-in-out forwards;
            -o-animation: testim-content-out .4s ease-in-out forwards;
            animation: testim-content-out .4s ease-in-out forwards;
        }

        .testim .cont div.inactive p {
            -webkit-animation: testim-content-out .5s ease-in-out forwards;
            -moz-animation: testim-content-out .5s ease-in-out forwards;
            -ms-animation: testim-content-out .5s ease-in-out forwards;
            -o-animation: testim-content-out .5s ease-in-out forwards;
            animation: testim-content-out .5s ease-in-out forwards;
        }



        @-webkit-keyframes testim-content-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @-moz-keyframes testim-content-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }


        @-webkit-keyframes testim-content-out {
            from {
                opacity: 1;

            }

            to {
                opacity: 0;

            }
        }

        @-moz-keyframes testim-content-out {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }




        @media all and (max-width: 300px) {
            body {
                font-size: 14px;
            }
        }

        @media all and (max-width: 500px) {
            .testim .arrow {
                font-size: 1.5em;
            }

            .testim .cont div p {
                line-height: 25px;
            }

        }
    </style>
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
                <br/>
                <br/>
                {{__('main.text-2')}}
            </p>
        </div>
        @if(count($reviews) != 0)
            <div id="testim" class="testim">
                <div class="wrap">

                    <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                    <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                    <ul id="testim-dots" class="dots">
                        @for($i = 0; $i < count($reviews); $i++)
                            <li class="dot {{$i == 0 ? 'active' : ''}}"></li>
                        @endfor
                    </ul>
                    <a id="testim-content" class="d-block cont" href="{{route('reviews', session()->get('language') ?? 'en')}}">
                        @for($i = 0; $i < count($reviews); $i++)
                            <div class="{{$i == 0 ? 'active' : ''}}">
                                <h2>{{$reviews[$i]->names}}</h2>
                                <p> {{$reviews[$i]->text}}</p>
                            </div>
                        @endfor
                    </a>
                </div>
            </div>

        @endif
        <div style="padding:44.27% 0 0 0;position:relative; margin: 0.8rem 0 0.8rem 0; ">
            <iframe src="https://player.vimeo.com/video/998207655?title=0&byline=0&portrait=0"
                    style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"
                    allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="main__posts" style=" border-top: 3px solid black;">
            @foreach($posts as $postActive)
                <a class="post"
                   href="{{route('post.show', ['locale' => session()->get('language') ?? 'en', 'post' => $postActive->id, 'slug' => $postActive->slug])}}">
                    <div style="display: flex; justify-content: space-between">
                        <h2 class="post__title">{{$postActive->title}}</h2>
                        <i class="fa-solid fa-arrow-left right"></i>
                    </div>
                    <div class="post__text">
                        {{$postActive->about}}
                    </div>
                </a>
            @endforeach
        </div>
    </section>

@endsection

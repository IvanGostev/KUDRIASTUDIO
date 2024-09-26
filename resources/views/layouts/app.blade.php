<!DOCTYPE html>
<html lang="{{session()->get('language') ?? 'en'}}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @if(isset($post))
        <title>KUDRYASTUDIO{{' - ' . $post->title}}</title>
        <meta name="description" content="{{$post->description}}">
        <meta name="keywords" content="{{$post->keywords}}"/>
    @else
        <title>{{seo()['title']}}</title>
        <meta name="description" content="{{seo()['description']}}">
        <meta name="keywords" content="{{seo()['keywords']}}"/>
    @endif
    <link rel="shortcut icon" href="{{ asset('/favicon.png') }}" type='image/png'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/reset.css")}}"/>
    <link rel="stylesheet" href="{{ asset("css/main.css")}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header style="position: relative">
    <div class="language-switch" style="position: absolute; right: 5%; top: 10%">
        <form action="{{route('language.switch')}}" method="post">
            @csrf
            <select onchange="this.form.submit()" name="language" class="form-control" style="font-size: 1.65vw;">
                <option
                    {{((session()->get('language') !== null ) and (session()->get('language') == 'en')) ? 'selected' : ''}} value="en">
                    English
                </option>
                <option
                    {{((session()->get('language') !== null ) and (session()->get('language') == 'ru')) ? 'selected' : ''}} value="ru">
                    Русский
                </option>
                <option
                    {{((session()->get('language') !== null ) and (session()->get('language') == 'es')) ? 'selected' : ''}}  value="es">
                    Español
                </option>
            </select>
        </form>
    </div>
    <ul class="header__menu" >
        <li class="header__item"><a class="{{request()->path() == '/' ? 'active' : ''}}"
                                    href="{{route('index', ['locale' => session()->get('language') ?? 'en'])}}">{{__('main.home')}}</a></li>
        <li class="header__item"><a class="{{request()->path() == 'portfolio' ? 'active' : ''}}"
                                    href="{{route('portfolio', ['locale' => session()->get('language') ?? 'en'])}}">{{__('main.portfolio')}}</a></li>
        <li class="header__item"><a class="{{str_contains(request()->path(), 'posts') ? 'active' : ''}}"
                                    href="{{route('post.index', ['locale' => session()->get('language') ?? 'en'])}}">{{__('main.blog')}}</a></li>
        <li class="header__item"><a class="{{request()->path() == 'price' ? 'active' : ''}}" href="{{route('price', ['locale' => session()->get('language') ?? 'en'])}}">{{__('main.price')}}</a>
        </li>
        <li class="header__item"><a class="{{request()->path() == 'reviews' ? 'active' : ''}}"
                                    href="{{route('reviews', ['locale' => session()->get('language') ?? 'en'])}}">{{__('main.reviews')}}</a></li>
        <li class="header__item"><a class="{{request()->path() == 'contact' ? 'active' : ''}}"
                                    href="{{route('contact', ['locale' => session()->get('language') ?? 'en'])}}">{{__('main.contact')}}</a></li>
    </ul>

    <nav class="navbar">
        <a href="#" class="nav-logo">
            <img src="{{ asset('img/logo-mobile.svg')}}" alt=""/>
        </a>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="{{route('index', ['locale' => session()->get('language') ?? 'en'])}}" class="nav-link {{request()->path() == '/' ? 'active' : ''}}">{{__('main.home')}}</a>
            </li>
            <li class="nav-item">
                <a href="{{route('portfolio', ['locale' => session()->get('language') ?? 'en'])}}" class="nav-link {{request()->path() == 'portfolio' ? 'active' : ''}}">{{__('main.portfolio')}}</a>
            </li>
            <li class="nav-item">
                <a href="{{route('post.index', ['locale' => session()->get('language') ?? 'en'])}}"
                   class="nav-link {{str_contains(request()->path(), 'posts') ? 'active' : ''}}">{{__('main.blog')}}</a>
            </li>
            <li class="nav-item">
                <a href="{{route('price', ['locale' => session()->get('language') ?? 'en'])}}" class="nav-link {{request()->path() == 'price' ? 'active' : ''}}">{{__('main.price')}}</a>
            </li>
            <li class="nav-item">
                <a href="{{route('reviews', ['locale' => session()->get('language') ?? 'en'])}}" class="nav-link {{request()->path() == 'reviews' ? 'active' : ''}}">{{__('main.reviews')}}</a>
            </li>
            <li class="nav-item">
                <a href="{{route('contact', ['locale' => session()->get('language') ?? 'en'])}}" class="nav-link {{request()->path() == 'contact' ? 'active' : ''}}">{{__('main.contact')}}</a>
            </li>
            <li class="nav-item">
                <form action="{{route('language.switch')}}" method="post">
                    @csrf
                    <select onchange="this.form.submit()" name="language" class="form-control" style="font-size: 20px;">
                        <option
                            {{((session()->get('language') !== null ) and (session()->get('language') == 'en')) ? 'selected' : ''}} value="en">
                            English
                        </option>
                        <option
                            {{((session()->get('language') !== null ) and (session()->get('language') == 'ru')) ? 'selected' : ''}} value="ru">
                            Русский
                        </option>
                        <option
                            {{((session()->get('language') !== null ) and (session()->get('language') == 'es')) ? 'selected' : ''}}  value="es">
                            Español
                        </option>
                    </select>
                </form>
            </li>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>
<aside>
    <div class="logo">
        <img src="{{ asset('img/logo.svg')}}" alt=""/>
    </div>
</aside>
<main>
    @yield('content')
</main>
<footer>
    <div class="footer__top">
        <ul class="footer__menu">
            <li class="footer__item"><a class="{{request()->path() == '/' ? 'active' : ''}}" href="{{route('index', session()->get('language') ?? 'en')}}">{{__('main.home')}}</a>
            </li>
            <li class="footer__item"><a class="{{request()->path() == 'portfolio' ? 'active' : ''}}"
                                        href="{{route('portfolio', session()->get('language') ?? 'en')}}">{{__('main.portfolio')}}</a></li>
            <li class="footer__item"><a class="{{str_contains(request()->path(), 'posts') ? 'active' : ''}}"
                                        href="{{route('post.index', session()->get('language') ?? 'en')}}">{{__('main.blog')}}</a></li>
            <li class="footer__item"><a class="{{request()->path() == 'price' ? 'active' : ''}}"
                                        href="{{route('price', session()->get('language') ?? 'en')}}">{{__('main.price')}}</a></li>
            <li class="footer__item"><a class="{{request()->path() == 'reviews' ? 'active' : ''}}"
                                        href="{{route('reviews', session()->get('language') ?? 'en')}}">{{__('main.reviews')}}</a></li>
            <li class="footer__item"><a class="{{request()->path() == 'contact' ? 'active' : ''}}"
                                        href="{{route('contact', session()->get('language') ?? 'en')}}">{{__('main.contact')}}</a></li>
        </ul>
        <div class="footer__social">
            <a href="https://www.instagram.com/kudryastudio/"><img src="{{ asset('img/inst.svg')}}" alt=""
                                                                   class="footer__inst"/></a>
            <a href="https://www.facebook.com/kudryastudio/"
            ><img src="{{ asset('img/facebook.svg')}}" alt="" class="footer__facebook"
                /></a>
        </div>
    </div>
    <div class="footer__bottom">
        <h6>©2024 KUDRYASTUDIO</h6>
    </div>
</footer>
<script src="{{ asset('js/main.js')}}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-P511YDKMW7"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'G-P511YDKMW7');
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-JobWAqYk5CSjWuVV3mxgS+MmccJqkrBaDhk8SKS1BW+71dJ9gzascwzW85UwGhxiSyR7Pxhu50k+Nl3+o5I49A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    // vars
    'use strict'
    var testim = document.getElementById("testim"),
        testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
        testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
        testimLeftArrow = document.getElementById("left-arrow"),
        testimRightArrow = document.getElementById("right-arrow"),
        testimSpeed = 4500,
        currentSlide = 0,
        currentActive = 0,
        testimTimer,
        touchStartPos,
        touchEndPos,
        touchPosDiff,
        ignoreTouch = 30;
    ;

    window.onload = function() {

        // Testim Script
        function playSlide(slide) {
            for (var k = 0; k < testimDots.length; k++) {
                testimContent[k].classList.remove("active");
                testimContent[k].classList.remove("inactive");
                testimDots[k].classList.remove("active");
            }

            if (slide < 0) {
                slide = currentSlide = testimContent.length-1;
            }

            if (slide > testimContent.length - 1) {
                slide = currentSlide = 0;
            }

            if (currentActive != currentSlide) {
                testimContent[currentActive].classList.add("inactive");
            }
            testimContent[slide].classList.add("active");
            testimDots[slide].classList.add("active");

            currentActive = currentSlide;

            clearTimeout(testimTimer);
            testimTimer = setTimeout(function() {
                playSlide(currentSlide += 1);
            }, testimSpeed)
        }

        testimLeftArrow.addEventListener("click", function() {
            playSlide(currentSlide -= 1);
        })

        testimRightArrow.addEventListener("click", function() {
            playSlide(currentSlide += 1);
        })

        for (var l = 0; l < testimDots.length; l++) {
            testimDots[l].addEventListener("click", function() {
                playSlide(currentSlide = testimDots.indexOf(this));
            })
        }

        playSlide(currentSlide);

        // keyboard shortcuts
        document.addEventListener("keyup", function(e) {
            switch (e.keyCode) {
                case 37:
                    testimLeftArrow.click();
                    break;

                case 39:
                    testimRightArrow.click();
                    break;

                case 39:
                    testimRightArrow.click();
                    break;

                default:
                    break;
            }
        })

        testim.addEventListener("touchstart", function(e) {
            touchStartPos = e.changedTouches[0].clientX;
        })

        testim.addEventListener("touchend", function(e) {
            touchEndPos = e.changedTouches[0].clientX;

            touchPosDiff = touchStartPos - touchEndPos;

            console.log(touchPosDiff);
            console.log(touchStartPos);
            console.log(touchEndPos);


            if (touchPosDiff > 0 + ignoreTouch) {
                testimLeftArrow.click();
            } else if (touchPosDiff < 0 - ignoreTouch) {
                testimRightArrow.click();
            } else {
                return;
            }

        })
    }
</script>
</body>
</html>

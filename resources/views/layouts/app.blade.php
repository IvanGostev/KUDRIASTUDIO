<!DOCTYPE html>
<html lang="en">
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
                                    href="{{route('index')}}">{{__('main.home')}}</a></li>
        <li class="header__item"><a class="{{request()->path() == 'portfolio' ? 'active' : ''}}"
                                    href="{{route('portfolio')}}">{{__('main.portfolio')}}</a></li>
        <li class="header__item"><a class="{{str_contains(request()->path(), 'posts') ? 'active' : ''}}"
                                    href="{{route('post.index')}}">{{__('main.blog')}}</a></li>
        <li class="header__item"><a class="{{request()->path() == 'price' ? 'active' : ''}}" href="{{route('price')}}">{{__('main.price')}}</a>
        </li>
        <li class="header__item"><a class="{{request()->path() == 'reviews' ? 'active' : ''}}"
                                    href="{{route('reviews')}}">{{__('main.reviews')}}</a></li>
        <li class="header__item"><a class="{{request()->path() == 'contact' ? 'active' : ''}}"
                                    href="{{route('contact')}}">{{__('main.contact')}}</a></li>
    </ul>

    <nav class="navbar">
        <a href="#" class="nav-logo">
            <img src="{{ asset('img/logo-mobile.svg')}}" alt=""/>
        </a>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="{{route('index')}}" class="nav-link {{request()->path() == '/' ? 'active' : ''}}">{{__('main.home')}}</a>
            </li>
            <li class="nav-item">
                <a href="{{route('portfolio')}}" class="nav-link {{request()->path() == 'portfolio' ? 'active' : ''}}">{{__('main.portfolio')}}</a>
            </li>
            <li class="nav-item">
                <a href="{{route('post.index')}}"
                   class="nav-link {{str_contains(request()->path(), 'posts') ? 'active' : ''}}">{{__('main.blog')}}</a>
            </li>
            <li class="nav-item">
                <a href="{{route('price')}}" class="nav-link {{request()->path() == 'price' ? 'active' : ''}}">{{__('main.price')}}</a>
            </li>
            <li class="nav-item">
                <a href="{{route('reviews')}}" class="nav-link {{request()->path() == 'reviews' ? 'active' : ''}}">{{__('main.reviews')}}</a>
            </li>
            <li class="nav-item">
                <a href="{{route('contact')}}" class="nav-link {{request()->path() == 'contact' ? 'active' : ''}}">{{__('main.contact')}}</a>
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
            <li class="footer__item"><a class="{{request()->path() == '/' ? 'active' : ''}}" href="{{route('index')}}">{{__('main.home')}}</a>
            </li>
            <li class="footer__item"><a class="{{request()->path() == 'portfolio' ? 'active' : ''}}"
                                        href="{{route('portfolio')}}">{{__('main.portfolio')}}</a></li>
            <li class="footer__item"><a class="{{str_contains(request()->path(), 'posts') ? 'active' : ''}}"
                                        href="{{route('post.index')}}">{{__('main.blog')}}</a></li>
            <li class="footer__item"><a class="{{request()->path() == 'price' ? 'active' : ''}}"
                                        href="{{route('price')}}">{{__('main.price')}}</a></li>
            <li class="footer__item"><a class="{{request()->path() == 'reviews' ? 'active' : ''}}"
                                        href="{{route('reviews')}}">{{__('main.reviews')}}</a></li>
            <li class="footer__item"><a class="{{request()->path() == 'contact' ? 'active' : ''}}"
                                        href="{{route('contact')}}">{{__('main.contact')}}</a></li>
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
</body>
</html>

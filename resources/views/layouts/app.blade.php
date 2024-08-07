<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KUDRYASTUDIO{{isset($post) ? ' - ' . $post->title : ''}}</title>
    <meta name="description"
          content="{{isset($post) ? $post->description : 'Discover KUDRIASTUDIO, where cinematic storytelling meets heartwarming love stories. Our unique style, inspired by cinema and beautiful aesthetics, captures the emotions and atmosphere of your special day with honesty and openness. Trust us to create a timeless and unforgettable visual masterpiece that reflects your passion and style.'}}">
    @if(isset($post))
        <meta name="keywords" content="{{$post->keywords}}"/>
    @endif


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset("css/reset.css")}}" />
    <link rel="stylesheet" href="{{ asset("css/main.css")}}" />
</head>
<body>
<header>
    <ul class="header__menu">
        <li class="header__item"><a class="{{request()->path() == '/' ? 'active' : ''}}" href="{{route('index')}}">HOME</a></li>
        <li class="header__item"><a class="{{request()->path() == 'portfolio' ? 'active' : ''}}" href="{{route('portfolio')}}">PORTFOLIO</a></li>
        <li class="header__item"><a class="{{str_contains(request()->path(), 'posts') ? 'active' : ''}}" href="{{route('post.index')}}">BLOG</a></li>
        <li class="header__item"><a class="{{request()->path() == 'price' ? 'active' : ''}}" href="{{route('price')}}">PRICE</a></li>
        <li class="header__item"><a class="{{request()->path() == 'reviews' ? 'active' : ''}}" href="{{route('reviews')}}">REVIEWS</a></li>
        <li class="header__item"><a class="{{request()->path() == 'contact' ? 'active' : ''}}" href="{{route('contact')}}">CONTACT</a></li>
    </ul>
    <nav class="navbar">
        <a href="#" class="nav-logo">
            <img src="{{ asset('img/logo-mobile.svg')}}" alt="" />
        </a>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="{{route('index')}}" class="nav-link {{request()->path() == '/' ? 'active' : ''}}">HOME</a>
            </li>
            <li class="nav-item">
                <a href="{{route('portfolio')}}" class="nav-link {{request()->path() == 'portfolio' ? 'active' : ''}}">PORTFOLIO</a>
            </li>
            <li class="nav-item">
                <a href="{{route('post.index')}}" class="nav-link {{str_contains(request()->path(), 'posts') ? 'active' : ''}}">BLOG</a>
            </li>
            <li class="nav-item">
                <a href="{{route('price')}}" class="nav-link {{request()->path() == 'price' ? 'active' : ''}}">PRICE</a>
            </li>
            <li class="nav-item">
                <a href="{{route('reviews')}}" class="nav-link {{request()->path() == 'reviews' ? 'active' : ''}}">REVIEWS</a>
            </li>
            <li class="nav-item">
                <a href="{{route('contact')}}" class="nav-link {{request()->path() == 'contact' ? 'active' : ''}}">CONTACT</a>
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
        <img src="{{ asset('img/logo.svg')}}" alt="" />
    </div>
</aside>
<main>
            @yield('content')
</main>
<footer>
    <div class="footer__top">
        <ul class="footer__menu">
            <li class="footer__item"><a class="{{request()->path() == '/' ? 'active' : ''}}" href="{{route('index')}}">HOME</a></li>
            <li class="footer__item"><a class="{{request()->path() == 'portfolio' ? 'active' : ''}}" href="{{route('portfolio')}}">PORTFOLIO</a></li>
            <li class="footer__item"><a class="{{str_contains(request()->path(), 'posts') ? 'active' : ''}}" href="{{route('post.index')}}">BLOG</a></li>
            <li class="footer__item"><a class="{{request()->path() == 'price' ? 'active' : ''}}" href="{{route('price')}}">PRICE</a></li>
            <li class="footer__item"><a class="{{request()->path() == 'reviews' ? 'active' : ''}}" href="{{route('reviews')}}">REVIEWS</a></li>
            <li class="footer__item"><a class="{{request()->path() == 'contact' ? 'active' : ''}}" href="{{route('contact')}}">CONTACT</a></li>
        </ul>
        <div class="footer__social">
            <a href=""><img src="{{ asset('img/inst.svg')}}" alt="" class="footer__inst" /></a>
            <a href=""
            ><img src="{{ asset('img/facebook.svg')}}" alt="" class="footer__facebook"
                /></a>
        </div>
    </div>
    <div class="footer__bottom">
        <h6>©2024 KUDRYASTUDIO</h6>
    </div>
</footer>
<script src="{{ asset('js/main.js')}}"></script>
</body>
</html>

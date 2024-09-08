@extends('layouts.app')
@section('content')
    <section class="title">
        <h1>{{__('main.title-contact')}}</h1>
    </section>
    <section class="contact">
        <div class="contact__img">
            <img src="{{ asset('img/contact.jpg')}}" alt="" />
        </div>
        <p class="contact__text">
            {!!__('main.contact-desc')!!}
        </p>
        <p class="contact__names">• {{__('main.contact-names')}}</p>
    </section>
    <section class="title">
        <h1>{{__('main.form')}}</h1>
    </section>
    <form class="form" action="{{route('contact.store')}}" method="post">
        @if (session()->has('msg'))
            <div class="form__group" style="text-align: center; font-weight: 700;">
               <p>{{ session()->get('msg') }}</p>
            </div>
            @else
            <div class="form__group">
                <label>{{__('main.form-name')}}</label>
                <input type="text" name="name" />
            </div>
            <div class="form__group">
                <label>{{__('main.form-phone')}}</label>
                <input type="phone" name="phone" />
            </div>
            <div class="form__group">
                <label>{{__('main.form-social')}}</label>
                <input type="text" name="social" />
            </div>
            <div class="form__group">
                <button type="submit">{{__('main.form-send')}}</button>
            </div>
        @endif
        @csrf

    </form>
@endsection

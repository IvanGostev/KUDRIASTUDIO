@extends('layouts.app')
@section('content')
    <section class="title">
        <h1>Contact</h1>
    </section>
    <section class="contact">
        <div class="contact__img">
            <img src="{{ asset('img/contact.png')}}" alt="" />
        </div>
        <p class="contact__text">
            “We couldn’t have asked for a more magical wedding day, and it’s all
            thanks to Kudryastudio! From the initial consultation to the final
            video edit, the team was professional, attentive, and incredibly
            talented. They captured every special moment beautifully, making us
            feel at ease throughout the entire process. The final video exceeded
            our expectations, and we are thrilled to have such a wonderful
            keepsake to relive our wedding day. Thank you, Kudryastudio, for
            preserving our memories so perfectly!”
        </p>
        <p class="contact__names">• Alex & Maria</p>
    </section>
    <section class="title">
        <h1>Form</h1>
    </section>
    <form class="form" action="{{route('contact.store')}}" method="post">
        @if (session()->has('msg'))
            <div class="form__group" style="text-align: center; font-weight: 700;">
               <p>{{ session()->get('msg') }}</p>
            </div>
            @else
            <div class="form__group">
                <label>Name</label>
                <input type="text" name="name" />
            </div>
            <div class="form__group">
                <label>Phone</label>
                <input type="phone" name="phone" />
            </div>
            <div class="form__group">
                <label>Social media</label>
                <input type="text" name="social" />
            </div>
            <div class="form__group">
                <button type="submit">Send</button>
            </div>
        @endif
        @csrf

    </form>
@endsection

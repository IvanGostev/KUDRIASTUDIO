@extends('layouts.app')
@section('content')
    <section class="title">
        <h1>{{__('main.title-blog')}}</h1>
    </section>
    <section class="posts">
        <form action="{{route('post.search')}}" style="display: flex; justify-content: right; font-size: 20px; align-items: center; width: 100%">
            <select onchange="this.form.submit()" class="form-control" name="category_id" style="display: block; font-size: 20px; width: 100%">
                @foreach($categories as $category)
                <option {{(isset($selectedCategoryID) and $selectedCategoryID == $category->id) ? 'selected' : ''}} value="{{$category->id}}">{{categoryTitle($category)}}</option>
                @endforeach
            </select>
        </form>
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

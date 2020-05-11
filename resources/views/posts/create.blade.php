@extends('layouts.layout', ['title'=>'Create post page'])

@section('content')

    <form action="{{ route('post.create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Создать пост</h3>

        @include('posts.partials.form')

        <input type="submit" value="Опубликовать" class="btn btn-primary">
    </form>

@endsection

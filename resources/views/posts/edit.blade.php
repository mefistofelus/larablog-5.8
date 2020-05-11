@extends('layouts.layout', ['title'=>'Edit post page'])

@section('content')

    <form action="{{ route('post.update', ['id'=>$post->post_id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <h3>Редактирование поста</h3>

        @include('posts.partials.form')

        <input type="submit" value="Обновить" class="btn btn-primary">
    </form>

@endsection

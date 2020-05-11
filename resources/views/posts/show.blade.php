@extends('layouts.layout', ['title'=>"Post #$post->post_id . $post->title"])

@section('content')

    <div class="row">
      <div class="col-lg-12 col-md-6 col-12">
          <div class="card my-3 shadow">
              <div class="card-header"><h3>{{ $post->title }}</h3></div>
              <div class="card-body p-0 pb-4">
                  <div class="card-img card-img__max" style="background-image:url({{ $post->img ?? asset('img/preview.jpg') }})"></div>
                  <div class="card-descr p-3">{{ $post->description }}</div>
                  <hr>
                  <div class="card-author pl-4">Автор: {{ $post->name }}</div>
                  <div class="card-date pl-4">Опуликован: {{ $post->created_at->diffForHumans() }}</div>
                  <div class="card-btn d-flex">
                      <a href="{{ route('post.index') }}" class="btn btn-outline-primary ml-4">На главную</a>
                      <a href="{{ route('post.edit', ['id' => $post->post_id]) }}" class="btn btn-warning ml-4">Редактировать</a>
                      {{--DELETE POST FORM--}}
                      <form action="{{ route('post.destroy', ['$id' =>$post->post_id]) }}"
                            method="post"
                            onsubmit="if (confirm ('Really delete the post?')) {return true} else {return false}">
                          @csrf
                          @method('DELETE')
                          <input type="submit" class="btn btn-danger ml-4" value="Удалить пост">
                      </form>
                      {{--DELETE POST FORM--}}

                  </div>
              </div>
          </div>
      </div>
    </div>

@endsection

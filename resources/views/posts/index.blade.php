@extends('layouts.layout', ['title'=>'Main page'])

@section('content')

    <div class="row pt-4">
      <div class="col-12">
          @if(isset($_GET['search']))
              @if(count($posts)>0)
                  <h2>По вашему запросу найдено: {{ count($posts) }} записи</h2>
              @else
                  <h2>По вашему запросу: "<?=htmlspecialchars($_GET['search'])?>" - постов не найдено</h2>
                  <a href="{{ route('post.index') }}" class="btn-link">Отобразить все посты</a>
              @endif
          @endif
      </div>
    </div>


    <div class="row">
      @foreach($posts as $post)
      <div class="col-lg-6 col-md-6 col-12">
          <div class="card my-3 shadow">
              <div class="card-header"><h3>{{ $post->title }}</h3></div>
              <div class="card-body p-0 pb-4">
                  <div class="card-img" style="background-image:url({{ $post->img ?? asset('img/preview.jpg') }})
                      "></div>
                  <div class="card-descr p-3">{{ $post->description }}</div>
                  <hr>
                  <div class="card-author pl-4">{{ $post->name }}</div>
                  <a href="{{ route('post.show', ['id' => $post->post_id]) }}" class="btn btn-outline-primary
                  ml-4">Read post</a>
              </div>
          </div>
      </div>
      @endforeach
    </div>

    @if(!isset($_GET['search']))
    {{ $posts->links() }}
    @endif

@endsection

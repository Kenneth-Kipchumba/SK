@extends('backend.layout.main')

@section('content')
<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <a href="{{ url('blog/create') }}" class="btn btn-success btn-sm float-right">
      Create New Post
    </a>
    <br><br>
    @foreach($posts as $post)
    <div class="card card-primary card-outline ml-5 mr-5">
      <div class="card-header">
        <a href="{{ url('blog', $post['id']) }}">
          <h5 class="m-0">{{ $post['title'] ?? '' }}</h5>
        </a>
        <a href="{{ url('blog/edit', $post->id) }}" class="btn btn-outline-primary" title="Edit">
          <i class="fas fa-edit"></i>
        </a>
      </div>
      <div class="card-body">
          <img src="" class="img-thumbnail img-fluid float-left mr-3" alt="Post Image">
          <?php
            $body = Str::of($post['body'])->words(50, '...');
          ?>
          {!! $body !!}
          <br><br>
          
          <a href="#" class="text-sm text-mute" style="text-decoration: underline;">
            {{ $post['author'] ?? '' }}
          <a/>
      </div>
    </div>
    @endforeach
  </div>
</div>
<!-- /.content -->
@endsection
@extends('backend.layout.main')

@section('content')
<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="card card-primary card-outline ml-5 mr-5">
      <div class="card-header">
          <div class="row">
            <div class="col-9">
              <h2 class="m-0">{{ $post->title ?? '' }}</h2>
            </div>
            <div class="col-3">
              <a href="{{ url('blog/edit', $post->id) }}" class="btn btn-outline-primary" title="Edit">
                <i class="fas fa-edit"></i>
              </a>
              <button class="btn btn-outline-danger" title="Delete">
                <i class="fas fa-trash"></i>
              </button>
            </div>
          </div>
      </div>
      <div class="card-body">
          <img src="" class="img-thumbnail img-fluid float-left mr-3" alt="Post Image">
          {!! $post->body !!}
          <br><br>
          
          <a href="#" class="text-sm text-mute" style="text-decoration: underline;">
            {{ $post->author ?? '' }}
          <a/>
      </div>
    </div>
  </div>
</div>
<!-- /.content -->
@endsection
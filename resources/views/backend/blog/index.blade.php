@extends('backend.layout.main')

@section('content')
<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="card card-primary card-outline ml-5 mr-5">
      <div class="card-header">
        <h5 class="m-0">Heading</h5>
        <a href="{{ url('blog/create') }}" class="btn btn-success btn-sm float-right">
          Create New Post
        </a>
      </div>
      <div class="card-body">
        <h6 class="card-title">Special title treatment</h6>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
<!-- /.content -->
@endsection
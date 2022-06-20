@extends('backend.layout.main')

@section('content')
<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="card card-success">
      <div class="card-header">
        <h5 class="card-title">Edit $post->title</h5>
      </div>
      <div class="card-body">
        <form action="{{ url('blog') }}" method="POST">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Post title" name="title">
              <div class="valid-feedback">Valid.</div>
              @error('title')
              <div class="invalid-feedback">Please fill out this field.</div>
              @enderror
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="author">Author</label>
                  <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" placeholder="Name of author" name="author">
                  @error('author')
                  <div class="invalid-feedback">Please fill out this field.</div>
                  @enderror
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="file">Image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="file" placeholder="Enter title" name="image">
                      <label class="custom-file-label" for="file">Choose post image</label>
                      @error('image')
                        <div class="invalid-feedback">Please fill out this field.</div>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="body">Body</label>
              <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body"></textarea>
              @error('body')
              <div class="invalid-feedback">Please fill out this field.</div>
              @enderror
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-success">Create</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  ClassicEditor
    .create( document.querySelector( '#body' ) )
    .then( editor => {
      console.log( editor );
    } )
    .catch( error => {
      console.error( error );
    } );

    // Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<!-- /.content -->
@endsection
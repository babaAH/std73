
@extends('layouts.admin')

@section('summernote')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection


@section('content')

<div class="container">
  <div class="col-md-12">
    Создать новую статью
  </div>
  <form method="POST">
    @csrf
    <textarea name="txtarea" id="summernote"></textarea>
  <button formaction="{{route('save-articale')}}">Сохранить статью</button>
  </form>
  <script>
        $('#summernote').summernote({
          // placeholder: 'Hello Bootstrap 4',
          tabsize: 2,
          height: 100
        });
  </script>
  
</div>
{{-- <form method="post">
  <textarea id="summernote" name="editordata"></textarea>
</form>
<script>
  $(document).ready(function() {
    $('#summernote').summernote();
  });
</script> --}}
{{-- <div id="summernote"></div>
<script>
  $('#summernote').summernote({
    placeholder: 'Hello stand alone ui',
    tabsize: 2,
    height: 120,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']]
    ]
  });
</script> --}}
@endsection
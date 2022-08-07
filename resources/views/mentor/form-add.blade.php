@extends('layouts.app-mentor')
@section('content')
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-11 offset-0">
                <div class="card">
                    <div class="card-header">
                     Form Add Camps Codev8
                    </div>
                    <br><br>
                    <div class="row justify-content-center">
                        <div class="col-lg-11 col-12">
                            <div class="row">
                                <div class="col-lg-3 col-12">
                                </div>
                                <div class="col-lg-8 col-12">
                                    <form action="{{ route('mentor.add') }}" class="basic-form" method="post">
                                        {{ csrf_field() }}
                                        <div class="mb-4">
                                            <label class="form-label">Title Camp</label>
                                            <input name="title" type="text" class="form-control" required>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Header Camp</label>
                                            <input name="header" type="text" class="form-control" required>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Feed Camp</label>
                                            <textarea name="feed" class="my-editor form-control" id="feed" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">URL Image Link</label>
                                            <input name="image" type="text" class="form-control" required>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Camp ID</label>
                                            <select name="camp_id" id="camp_id" class="form-control">
                                                @foreach ($camp_feeds as $cf)
                                                <option value="{{ $cf->camp_id }}">{{ $cf->camp_id }} - {{ $cf->Camp->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <input type="submit" class="w-100 btn btn-primary">
                                    </form>
                                    <br><br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script src="https://cdn.tiny.cloud/1/8iejvodqw0gj8d0kqz4k8spljndsuvok9jv7jxc3ehf51r2d/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.1.2/tinymce.min.js"></script>
    <script>
        tinymce.init({
          selector: 'textarea.my-editor',
          plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
          toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
          toolbar_mode: 'floating',
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Author name',
       });
      </script>
@endsection
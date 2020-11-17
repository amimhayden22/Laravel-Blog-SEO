@extends('admin.layouts.master')
@section('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('head-title-content')
    Tambah Post
@endsection
{{-- @section('sub-title-content')
    Halaman Tambah Post
@endsection --}}
@section('main-content')
    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                <strong>{{ $error }}</strong>
            </div>
        @endforeach
    @endif

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            <strong>{{ Session('success') }}</strong>
        </div>
    @endif
    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="category_id">Kategori</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value="" holder>- Pilih -</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tag">Tag</label>
            <select name="tags[]" id="tag" class="form-control select2" multiple="">
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
          <label for="content">Konten</label>
          <textarea name="content" id="content" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label for="image">Thumbnail</label>
          <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Simpan Post</button>
        </div>
    </form>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        var options = {
          filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
          filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
          filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
          filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    <script >
        CKEDITOR.replace( 'content', options);
    </script>
@endsection
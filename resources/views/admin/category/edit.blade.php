@extends('admin.layouts.master')
@section('head-title-content')
    Edit Kategori
@endsection
{{-- @section('sub-title-content')
    Halaman Edit Kategori
@endsection --}}
@section('main-content')
    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                <strong>{{ $error }}</strong>
            </div>
        @endforeach
    @endif

    <form action="{{ route('category.update', $editCategory->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="name">Kategori</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$editCategory->name}}">
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Update Kategori</button>
          </div>
    </form>
@endsection
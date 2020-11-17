@extends('admin.layouts.master')
@section('head-title-content')
    Tambah Kategori
@endsection
{{-- @section('sub-title-content')
    Halaman Tambah Kategori
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
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Kategori</label>
            <input type="text" name="name" id="name" class="form-control">
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Simpan Kategori</button>
          </div>
    </form>
@endsection
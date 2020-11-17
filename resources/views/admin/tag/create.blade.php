@extends('admin.layouts.master')
@section('head-title-content')
    Tambah Tag
@endsection
{{-- @section('sub-title-content')
    Halaman Tambah Tag
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
    <form action="{{ route('tag.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Tag</label>
            <input type="text" name="name" id="name" class="form-control">
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Simpan Tag</button>
          </div>
    </form>
@endsection
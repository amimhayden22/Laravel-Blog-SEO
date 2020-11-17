@extends('admin.layouts.master')
@section('head-title-content')
    Edit Tag
@endsection
{{-- @section('sub-title-content')
    Halaman Edit Tag
@endsection --}}
@section('main-content')
    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                <strong>{{ $error }}</strong>
            </div>
        @endforeach
    @endif

    <form action="{{ route('tag.update', $editTag->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="name">Tag</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$editTag->name}}">
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Update Tag</button>
          </div>
    </form>
@endsection
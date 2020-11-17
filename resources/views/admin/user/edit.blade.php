@extends('admin.layouts.master')
@section('head-title-content')
    Edit User
@endsection
{{-- @section('sub-title-content')
    Halaman Edit User
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
    <form action="{{ route('user.update', $editUser->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $editUser->name }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $editUser->email }}" readonly>
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role" class="form-control">
                <option value="" holder>- Pilih -</option>
                <option value="1"  holder
                @if ($editUser->role == 1)
                    selected
                @endif>
                Administrator</option>
                <option value="0" holder
                @if ($editUser->role == 0)
                    selected
                @endif>
                Penulis</option>
            </select>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Update User</button>
        </div>
    </form>
@endsection
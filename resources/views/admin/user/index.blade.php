@extends('admin.layouts.master')
@section('head-title-content')
    User
@endsection
{{-- @section('sub-title-content')
    Halaman Data User
@endsection --}}
@section('main-content')
@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{ Session('success') }}</strong> 
    </div>

    <script>
    $(".alert").alert();
    </script>
@endif
<a href="{{ route('user.create') }}" class="btn btn-success btn-sm">Tambah User</a>
<br><br>
<table class="table table-striped table-hover table-sm table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $data => $user)
            <tr>
                <td>{{ $data + $users->firstitem() }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if ($user->role)
                        <span class="badge badge-info">Administrator</span>
                    @else
                        <span class="badge badge-warning">Penulis</span>
                    @endif
                </td>
                <td>
                    <form action="{{ route('user.destroy', $user->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td>Data tidak ada!</td>
            </tr>
        @endforelse
    </tbody>
</table>
{{ $users->links() }}
@endsection
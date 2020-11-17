@extends('admin.layouts.master')
@section('head-title-content')
    Kategori
@endsection
{{-- @section('sub-title-content')
    Halaman Data Kategori
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
<a href="{{ route('category.create') }}" class="btn btn-success btn-sm">Tambah Kategori</a>
<br><br>
<table class="table table-striped table-hover table-sm table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Slug</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($categories as $data => $category)
            <tr>
                <td>{{ $data + $categories->firstitem() }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td>
                    <form action="{{ route('category.destroy', $category->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>
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
{{ $categories->links() }}
@endsection
@extends('admin.layouts.master')
@section('head-title-content')
    Sampah Post
@endsection
{{-- @section('sub-title-content')
    Halaman Data Sampah Post
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
<table class="table table-striped table-hover table-sm table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Konten</th>
            <th>Slug</th>
            <th>Tag</th>
            <th>Thumbnail</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($posts as $data => $post)
            <tr>
                <td>{{ $data + $posts->firstitem() }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->slug }}</td>
                <td>
                    @foreach ($post->tags as $tag)
                        {{ $tag->name }},
                    @endforeach
                </td>
                <td><img src="{{ asset($post->image) }}" alt="Thumbnail" class="img-thumbnail" width="50px"></td>
                <td>
                    <form action="{{ route('post.force.delete', $post->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <a href="{{ route('post.restore', $post->id) }}" class="btn btn-info btn-sm">Restore</a>
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
{{ $posts->links() }}
@endsection
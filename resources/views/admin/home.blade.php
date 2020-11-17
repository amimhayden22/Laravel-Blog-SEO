@extends('admin.layouts.master')
@section('head-title-content')
Dashboard
@endsection
@section('main-content')
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total User</h4>
                </div>
                <div class="card-body">
                    10
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="far fa-newspaper"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Berita</h4>
                </div>
                <div class="card-body">
                    42
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="fas fa-list"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Kategori</h4>
                </div>
                <div class="card-body">
                    1,201
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fas fa-hashtag"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Tag</h4>
                </div>
                <div class="card-body">
                    47
                </div>
            </div>
        </div>
    </div>                  
</div>
<div class="row">
    <div class="col-lg-7 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Latest Posts</h4>
                <div class="card-header-action">
                    <a href="#" class="btn btn-primary">View All</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>                         
                            <tr>
                                <td>
                                    Introduction Laravel 5
                                    <div class="table-links">
                                        in <a href="#">Web Development</a>
                                        <div class="bullet"></div>
                                        <a href="#">View</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="font-weight-600"><img src="assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Gus Khamim</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                  Laravel 5 Tutorial - MVC
                                  <div class="table-links">
                                    in <a href="#">Web Development</a>
                                    <div class="bullet"></div>
                                    <a href="#">View</a>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="font-weight-600"><img src="assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Laila Sasmitha</a>
                                </td>
                                <td>
                                  <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                  <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Laravel 5 Tutorial - Migration
                                    <div class="table-links">
                                    in <a href="#">Web Development</a>
                                    <div class="bullet"></div>
                                    <a href="#">View</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="font-weight-600"><img src="assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> John Doe</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-md-12 col-12 col-sm-12">
        <div class="card mt-sm-5 mt-md-0">
            <div class="card-header">
              <h4>Pengunjung</h4>
            </div>
            <div class="card-body">
                <div class="summary">
                    <div class="summary-info">
                      <h4>1000</h4>
                      <div class="text-muted">Jumlah orang yang mengunjungi blog</div>
                      <div class="d-block mt-2">                              
                        <a href="#">Lihat blog</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
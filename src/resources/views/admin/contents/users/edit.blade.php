@extends('layouts.main')

@section('css')

@endsection

@section('content')
<div class="page-heading">
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-md-6 order-md-1 order-last">
				<h3>Ubah Pengguna</h3>
			</div>

			<div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="{{ route('users') }}">Pengguna</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ubah Pengguna</li>
                    </ol>
                </nav>
            </div>
		</div>
	</div>
</div>

<section class="section">
	<div class="row">
		<div class="col-md-3">
			<div class="card card-outline-primary">
				<div class="card-body">
					<div class="center">
						<img class="profile-user-img img-fluid img-circle" 
						src="{{ asset('assets/images/faces/2.jpg') }}" alt="Avatar Pengguna">
					</div>

					<br>
				</div>
			</div>
		</div>

		<div class="col-md-9">
			<div class="card card-outline-primary">
				<div class="card-body">
					<form action="{{ route('update.user', $data->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="form-group row">
						<label style="font-weight: 400" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                        	<input type="text" name="name" class="form-control" value="{{ $data->name }}" required>
                        </div>
					</div>

					<div class="form-group row">
						<label style="font-weight: 400" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                        	<input type="email" name="email" class="form-control" value="{{ $data->email }}" required>
                        </div>
					</div>
				</div>

				<div class="card-footer">
					<div class="float-right">
						<a class="btn btn-secondary" href="{{ route('users') }}"><span class="fa fa-reply"></span>&nbsp;&nbsp; Kembali</a>
		                <button type="submit" class="btn btn-primary ml-1">
		                    <i class="fa fa-pencil-alt"></i> &nbsp; Simpan
		                </button>
					</div>
					</from>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('javascript')   

@endsection
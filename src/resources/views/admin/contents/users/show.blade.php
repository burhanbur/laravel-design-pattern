@extends('layouts.main')

@section('css')
<style>
	.img-circle {
		border-radius: 50%;
	}

	.profile-user-img {
	  border: 3px solid $gray-500;
	  margin: 0 auto;
	  padding: 3px;
	  width: 200px;
	}

	.profile-username {
	  font-size: 21px;
	  margin-top: 5px;
	}
</style>
@endsection

@section('content')
<div class="page-heading">
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-md-6 order-md-1 order-last">
				<h3>Detail Pengguna</h3>
			</div>

			<div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="{{ route('users') }}">Pengguna</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Pengguna</li>
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

		            <h3 class="profile-username center" style="font-size: 16px;"><strong>{{ $data->name }}</strong></h3>

		            <a href="javascript:void(0);" class="btn btn-success btn-block"><b>Selamat Datang</b></a>
				</div>
			</div>
		</div>

		<div class="col-md-9">
			<div class="card card-outline-primary">
				<div class="card-body">
					<form>
						<div class="form-group row">
							<label style="font-weight: 400" class="col-sm-3 col-form-label">Email</label>
	                        <div class="col-sm-9">
	                        	<label style="border: 0; color: black;" class="form-control">
	                          		{{ $data->email }}
	                        	</label>
	                        </div>
						</div>
					</form>
				</div>

				<div class="card-footer">
					<div class="float-right">
						<a class="btn btn-secondary" href="{{ route('users') }}"><span class="fa fa-reply"></span>&nbsp;&nbsp; Kembali</a>
						<a class="btn btn-primary" href="{{ route('edit.user', $data->id) }}"><span class="fa fa-edit"></span>&nbsp;&nbsp; Ubah</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

@section('javascript')    

@endsection
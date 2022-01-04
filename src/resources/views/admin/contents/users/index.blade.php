@extends('layouts.main')
<link rel="stylesheet" href="{{ asset('assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css') }}">
@section('css')

@endsection

@section('content')
<div class="page-heading">
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-md-6 order-md-1 order-last">
				<h3>Daftar Pengguna</h3>
			</div>

			<div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="{{ route('users') }}">Pengguna</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Daftar Pengguna</li>
                    </ol>
                </nav>
            </div>
		</div>
	</div>
</div>

<section class="section">
	<div class="card">
		<div class="card-header">
			<a href="" class="btn btn-success" data-bs-target="#modal-add-data" data-bs-toggle="modal"><span class="fa fa-user-plus"></span> &nbsp;Tambah Pengguna</a>

			@include('admin.contents.users.add')
		</div>

		<div class="card-body">
			<table class="table" id="table1">
				<thead>
					<tr>
						<th class="center">No</th>
						<th class="center">Nama</th>
						<th class="center">Email</th>
						<th style="width: 15%"></th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1 ?>
					@foreach ($data as $row)
					<tr>
						<td class="center">{{ $no }}</td>
						<td>{{ $row->name }}</td>
						<td>{{ $row->email }}</td>
						<td class="center">
							<a href="{{ route('user', $row->id) }}" class="btn btn-sm btn-info" title="Lihat Data"><span class="fa fa-eye"></span></a>
							<a href="{{ route('edit.user', $row->id) }}" class="btn btn-sm btn-warning" title="Ubah Data"><span class="fa fa-pencil-alt"></span></a>
							<form method="POST" action="{{ route('destroy.user', $row->id) }}" style="display: inline;">
			                    <input type="hidden" name="_method" value="DELETE">
			                    @csrf
			                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><span class="fa fa-trash"></span></button>
			                </form>
						</td>
					</tr>
					<?php $no++ ?>
					@endforeach
				</tbody>
			</table>
		</div>

	</div>
</section>

@endsection

@section('javascript')
<script src="{{ asset('assets/vendors/jquery-datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js') }}"></script>

<script>
	$("#table1").DataTable();
</script>
@endsection
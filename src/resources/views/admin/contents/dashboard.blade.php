@extends('layouts.main')

@section('css')

@endsection

@section('content')
<div class="page-heading">
	<h3>Dashboard</h3>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4>Visitors</h4>
			</div>

			<div class="card-body">					
			    <div id="chart-profile-visit"></div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('javascript')    
<script src="{{ asset('assets/vendors/apexcharts/apexcharts.js') }}"></script>
<script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
@endsection
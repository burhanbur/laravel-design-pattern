<script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>

<!-- <script src="{{ asset('assets/vendors/toastify/toastify.js') }}"></script> -->
<!-- <script src="{{ asset('assets/js/extensions/toastify.js') }}"></script> -->

<script src="{{ asset('assets/js/jquery.chained.min.js') }}"></script>

<script src="{{ asset('assets/vendors/fontawesome/all.min.js') }}"></script>

@yield('javascript')

<script src="{{ asset('assets/js/mazer.js') }}"></script>

<script>
	$('.delete-confirmation').on('click', function(e){
		var c = confirm('Apakah Anda yakin ingin menghapus data ini?');
		return c;
	});
</script>

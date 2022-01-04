<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
<div id="app">
	@include('layouts.sidebar')

	<div id="main">
		
		@include('layouts.header')
		
		@if (Session::has('success'))
            <div class="alert alert-success alert-dismissible show fade">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
		
		@if (Session::has('error'))
            <div class="alert alert-danger alert-dismissible show fade">
                {{ Session::get('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

		@yield('content')

		@include('layouts.footer')
		
	</div>
</div>

@include('layouts.javascript')

</body>
</html>
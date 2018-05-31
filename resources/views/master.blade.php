<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('layouts.head')
	<body>

		<div class="container">
			@include('layouts.header_nav')
			@yield('content')
			@include('layouts.footer')
		</div>

	</body>
</html>

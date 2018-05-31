<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('layouts.head')
	<body>
		<div class="container">

			@yield('content')
			@include('layouts.footer')
			
		</div>
	</body>
</html>

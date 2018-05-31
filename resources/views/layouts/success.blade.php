
	@if ($flash = session('message'))
		<div class="alert alert-success message" role="alert">
			{{ $flash }}
		</div>
	@endif

@extends('master2')

@section('content')
	<div id="particles-js" class="col-lg-12 col-md-12 col-sm-12">

		<div class="row">
			<div class="col-lg-4 offset-lg-4">
				<div class="mains_create_form">
					<br>
					@include('layouts.errors')
					<br>
					<h2>Add a book</h2>
						<form action="/mains" method="POST">
							{{ csrf_field() }}
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" class="form-control" id="title"  name="title">
							</div>
							<div class="form-group">
								<label for="price">Price</label>
								<input type="text" class="form-control" id="price" name="price">
							</div>
							<div class="form-group">
								<label for="img_url">Image</label>
								<input type="text" class="form-control" id="img_url" name="image">
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Description</label>
								{{-- <textarea class="form-control" id="description" name="description">
								</textarea> --}}
								<input type="text" class="form-control" id="description" name="description">

							</div>
							<button type="submit" class="btn btn-outline-warning" id='java'>Submit</button>
						</form>
				</div>
			</div>
		</div>
	</div>
	@include('layouts.particules')
<br>

@endsection

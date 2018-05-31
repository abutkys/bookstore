@extends('master2')
@section('content')
	<section id="section_one">
		<br>
		<hr>
		<br>
		<div class="heading_2">
			<h2>Main collection</h2>
			<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
			<br>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
			<br>
			<hr>
			<br>
			<div class="row section_1_mainCollection_cards">
				<div class="col-lg-12 col-md-12 col-xs-12">
						<div class="card section_one_img_show" style="width: 18rem;">
							<img class="card-img-top" src="{{
								$main->image
							}}" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">{{ $main->title }}</h5>
								<h5 class="card-price">Price: {{$main->price}} €</h5>
								<p class="card-text">{{ $main->description }}</p>
								<a href="{{ route('mains.index') }}" class="btn btn-primary">Return</a>
								<a href="{{route('mains.edit', $main)}}" class="btn btn-danger">Edit</a>
								<form class="form_delete"  action="{{route('mains.delete', $main)}}" method="POST">
							            @method('DELETE')
							            @csrf
							            <button type="submit" class="btn btn-danger" name="button">Delete</button>
							      </form>
								{{-- <a href="{{route('mains.delete', $main)}}" class="btn btn-danger">Delete</a> --}}
							</div>
						</div>
				</div>

@endsection

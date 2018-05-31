@extends('master')

@section('content')
		<br>
			@include('layouts.success')
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
		<a href="{{ route('mains.index') }}"  class="btn btn-outline-dark" role="button" aria-pressed="true">Show main collection</a>
		<a href="{{route('mains.create')}}"  class="btn btn-outline-dark" role="button" role="button" aria-pressed="true">Create new item</a>
			<br>
			<hr>
			<br>
			<div class="row section_1_mainCollection_cards">
				@foreach ($mains as $main)
				<div class="col-lg-4 col-md-6 col-xs-4 section_1_cards">
						<div class="card section_one_img" style="width: 18rem;">
							<img class="card-img-top" src="{{
								$main->image
							}}" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">{{ $main->title }}</h5>
								<h5 class="card-price">Price: {{$main->price}} €</h5>
								<p class="card-text">{{ $main->description }}</p>
								<a href="{{route('mains.show', $main)}}" class="btn btn-primary">Read more</a>
							</div>
						</div>

				</div>
			@endforeach
@endsection

@extends('master')

@section('content')

		@include('layouts.success')
		<br>
		<hr>
		<br>
		{{-- Main collection --}}
			<section id="section_one">

					<div class="heading_2">
						<h2>Main collection</h2>
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
						<br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					<br>
					<br>
						<a href="{{ route('mains.index') }}"  class="btn btn-outline-dark" role="button" aria-pressed="true">Show main collection</a>
						<a href="{{route('mains.create')}}"  class="btn btn-outline-dark" role="button" role="button" aria-pressed="true">Create new item</a>
					<br>
					<br>
			</section>
		<hr>
		<br>
		<br>
		{{-- Top 10 of our books --}}

			<section id="section_two">
				<div class="section_frame">
				<h2>Top 10 of our books<br></h2>
				<br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
				<a href=""  class="btn btn-outline-dark" role="button" aria-pressed="true">Show Top 10</a>
		<hr>
		<br>
				<div class="row section_frame_kids_cards">
				<div class="col-sm">
				<div class="card section_one_img" style="width:12rem;">
					<img class="card-img-top" src="https://images.penguinrandomhouse.com/cover/9780763677541" alt="Card image cap">
					<div class="card-body">
						<h6>1</h6>
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
				</div>
			</div>
		<br>
		<hr>
		<br>
			</section>

		{{-- For the young(and young at heart) --}}
			<section id="section_three">
				<div class="section_frame">
					<h2>Top 5 <br>For the young(and young at heart)</h2>
					<br>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
		<br>
				<a href=""  class="btn btn-outline-dark" role="button" aria-pressed="true">Show Top 10 young</a>
		<hr>
		<br>
				<div class="row section_frame_kids_cards">
					<div class="col-sm">
						<div class="card section_one_img" style="width: 12rem;">
							  <img class="card-img-top img-circle" src="https://images.penguinrandomhouse.com/cover/9780763677541" alt="Card image cap">
							  <div class="card-body">
								  <h6>1</h6>
							    <h5 class="card-title">Card title</h5>
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  </div>
						</div>
					</div>
					<div class="col-sm">
						<div class="card section_one_img" style="width: 12rem;">
							  <img class="card-img-top" src="https://images.penguinrandomhouse.com/cover/9780515157260" alt="Card image cap">
							  <div class="card-body">
								  <h6>2</h6>
							    <h5 class="card-title">Card title</h5>
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  </div>
						</div>
					</div>
					<div class="col-sm">
						<div class="card section_one_img" style="width: 12rem;">
							  <img class="card-img-top" src="https://images.penguinrandomhouse.com/cover/9780515157260" alt="Card image cap">
							  <div class="card-body">
								  <h6>3</h6>
							    <h5 class="card-title">Card title</h5>
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  </div>
						</div>
					</div>
				</div>
		<br>
		<hr>
		<br>
			</section>
		{{-- News --}}
			<section id="section_four">
				<div class="section_frame">
		<br>
					<h2>News</h2>
		<br>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
		<br>
		<hr>
		<br>
			</section>
		{{-- Readers section --}}
			<div class="container">
				<section id="section_five">
					<div class="section_frame">
						<h2>Readers section<br></h2>
			<br>
						<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 ">
							<nav id="navbar-example2" class="navbar navbar-light bg-warning">
								<a class="navbar-brand" href="#">Our readers comments</a>
								<ul class="nav nav-pills">
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="#one">one</a>
											<a class="dropdown-item" href="#two">two</a>
											<a class="dropdown-item" href="#three">three</a>
										</div>
									</li>
								</ul>
							</nav>
							<div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
								<h4 id="one">one</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<h4 id="two">two</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<h4 id="three">three</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
							<div class="form-group">
								<button type="button" class="btn btn-outline-primary">Leave a comment</button>
							</div>
						</div>
						</div>
					</div>
			<br>
			<hr>
			<br>
				</section>
			</div>

@endsection

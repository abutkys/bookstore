<header>
	<div id="main_img">
			<div id="main_img_overlay">
				<i class="fas fa-bars toggle_menu"></i>
				<div class="sidebar_menu">
					<i class="fas fa-arrow-left"></i>
					<div class="sidebar_submenu">
						<nav>
							<ul class="navigation_selection">
								<li class="navigation_item"><a href="/">Home</a></li>
								<li class="navigation_item"><a href="#section_one">Main Collections</a></li>
								<li class="navigation_item"><a href="#section_two">Top 10 of our books<a/></li>
								<li class="navigation_item"><a href="#section_three">Top 10 kids<a/></li>
								<li class="navigation_item"><a href="#section_four">News<a/></li>
								<li class="navigation_item"><a href="#section_five">Readers<a/></li>
							<!-- Authentication Links -->
							@guest
								<li class="navigation_item"><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
				                        <li class="navigation_item"><a  href="{{ route('register') }}">{{ __('Register') }}</a></li>
							@else
							    <li class="nav-item dropdown navigation_item">
								  <a id="navbarDropdown" class=" dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }} <span class="caret"></span>
								  </a>

								  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}"
									   onclick="event.preventDefault();
											     document.getElementById('logout-form').submit();">
									    {{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									    @csrf
									</form>
								  </div>
							    </li>
							@endguest
							</ul>
						</nav>
					</div>
				</div>
				<div class="intro">
					<h1 id="top">Welcome<br>in<br>our<br>library ...</h1>
				</div>
			</div>
		</div>
</header>

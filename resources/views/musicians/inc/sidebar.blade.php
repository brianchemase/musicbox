<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="{{route('musicdash')}}">
                    <!-- <img src="{{asset('logo/sisdologo.png')}}" alt="Ndururumo" width="50" height="60"> -->
                    <span class="align-middle">Music Box </span>
                </a>
				<ul class="sidebar-nav">
					<li class="sidebar-header">
						System Tabs
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="{{route('musicdash')}}">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
					</li>

					<li class="sidebar-header">
						Music Section
					</li>

		
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('availableMusic')}}">
                            <i class="align-middle" data-feather="airplay"></i> <span class="align-middle">View Available Music</span>
                        </a>
					</li>

					<li class="sidebar-header">
						My Contribution
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('myavailableMusic')}}">
                            <i class="align-middle" data-feather="grid"></i> <span class="align-middle">My Uploads</span>
                        </a>
					</li>
                    <li class="sidebar-item">
						<a class="sidebar-link" href="{{route('uploadmusicform')}}">
                            <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Submit Upload Music</span>
                        </a>
					</li>

                    <li class="sidebar-item">
						<a class="sidebar-link" href="{{route('requestform')}}">
                            <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Submit Request</span>
                        </a>
					</li>

                    <li class="sidebar-item">
						<a class="sidebar-link" href="{{route('musicattempt')}}">
                            <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Upload Music Attempt</span>
                        </a>
					</li>

					<li class="sidebar-header">
						Admin
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('musicdash')}}">
                            <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Make Donation</span>
                        </a>
					</li>

				


					<li class="sidebar-header">
						Plugins & Addons
					</li>
                    <li class="sidebar-item">
						<a class="sidebar-link" href="{{route('musicpage')}}">
                            <i class="align-middle"data-feather="user"></i> <span class="align-middle">Music Page</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('userprofilepage')}}">
                            <i class="align-middle"data-feather="user"></i> <span class="align-middle">Profile</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('blankpage')}}">
                            <i class="align-middle"data-feather="user"></i> <span class="align-middle">blank</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('formpage')}}">
                            <i class="align-middle"data-feather="user"></i> <span class="align-middle">Form</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="charts-chartjs.html">
                             <i class="align-middle" data-feather="aperture"></i> <span class="align-middle">Support</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
                            <i class="align-middle" data-feather="power"></i> <span class="align-middle">Signout</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{ route('logout') }}"
										onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
										<i class="align-middle" data-feather="power"></i>	{{ __('Signout') }}
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
						</li>
				</ul>

				
			</div>
		</nav>
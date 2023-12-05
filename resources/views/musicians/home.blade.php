@extends('musicians.inc.master')

@section('title','Dashboard')

@section('content')

<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Music Box</strong> Dashboard</h1>

					<div class="row">
						<div class="col-sm-6 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Registered Music</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-primary">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign align-middle"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
											</div>
										</div>
									</div>
								
									<h1 class="mt-1 mb-3"> {{$registeredMusic}}</h1>
									<div class="mb-0">
										<span class="text-muted">Current Music Available</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Registered Members</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-primary">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag align-middle"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
											</div>
										</div>
									</div>
								
									<h1 class="mt-1 mb-3"> {{$registedMembers}}</h1>
									<div class="mb-0">
										<span class="text-muted">Total active members</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">My Contributions</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-primary">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity align-middle"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">{{$MyContributions}}</h1>
									
									<div class="mb-0">
										
										<span class="text-muted">Total Submitions done </span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Pending Requests</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-primary">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart align-middle"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
											</div>
										</div>
									</div>
								
									<h1 class="mt-1 mb-3">{{$PendingRequests}}</h1>
									<div class="mb-0">
										
										<span class="text-muted">Registered Requests</span>
									</div>
								</div>
							</div>
						</div>
					</div>

				<div class="row">
					<div class="container py-3">
					<div class="title h1 text-center">Horizontal cards - Bootstrap 4</div>
					<!-- Card Start -->
					<div class="card">
						<div class="row ">

							<div class="col-md-7 px-3">
								<div class="card-block px-6">
								<h4 class="card-title">Horizontal Card with Carousel - Bootstrap 4 </h4>
								<p class="card-text">
									The Carousel code can be replaced with an img src, no problem. The added CSS brings shadow to the card and some adjustments to the prev/next buttons and the indicators is rounded now. As in Bootstrap 3
								</p>
								<p class="card-text">Made for usage, commonly searched for. Fork, like and use it. Just move the carousel div above the col containing the text for left alignment of images</p>
								<br>
								<a href="#" class="mt-auto btn btn-primary  ">Read More</a>
								</div>
							</div>
										<!-- Carousel start -->
										<div class="col-md-5">
											<div id="CarouselTest" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
												<li data-target="#CarouselTest" data-slide-to="1"></li>
												<li data-target="#CarouselTest" data-slide-to="2"></li>

											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
												<img class="d-block" src="https://picsum.photos/450/300?image=1072" alt="">
												</div>
												<div class="carousel-item">
												<img class="d-block" src="https://picsum.photos/450/300?image=855" alt="">
												</div>
												<div class="carousel-item">
												<img class="d-block" src="https://picsum.photos/450/300?image=355" alt="">
												</div>
												<a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
												<a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
							</div>
							</div>
						</div>
						<!-- End of carousel -->
						</div>
					</div>
					<!-- End of card -->

					</div>

			

					<div class="row">
						
						<section id="gallery">
						<div class="container">
							<div class="row">
								<div class="col-lg-4 mb-4">
									<div class="card">
										<img data-tilt src="{{asset('dash/img/holders/chris-bair-A10y2Eq7OHY-unsplash.jpg')}}" width="700" height="120" alt="" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Trumpet</h5>
											<p class="card-text">The trumpet, a shining example of a brass wind instrument, commands attention with its resplendent appearance and unmistakable sound. Crafted from gleaming brass, this musical marvel features a distinctive shape, including a flared bell and a series of coiled tubing, culminating in a small, mouthpiece-ready end. With its rich history dating back centuries and its prominent role in various musical genres, the trumpet's clarion call has the power to evoke a wide range of emotions, from triumphant fanfares to soul-stirring melodies. Whether heralding grand entrances, leading orchestras, or taking center stage in jazz ensembles, the trumpet's versatile and commanding presence makes it an integral part of the world of music.</p>
											<a href="" class="btn btn-outline-success btn-sm">Read More</a>
											<a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 mb-4">
									<div class="card">
										<img data-tilt src="{{asset('dash/img/holders/nathan-bingle-MIRbeLb6HTw-unsplash.jpg')}}" alt="" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title">The TUBA</h5>
												<p class="card-text">The tuba, a majestic member of the brass family, exudes both power and grace. With its imposing size and curved shape, this brass wind instrument is instantly recognizable. The tuba's deep, resonant tones form the foundation of many musical compositions, providing the essential bass notes that underpin orchestral symphonies, marching band performances, and even modern jazz ensembles. Its iconic bell, flaring outwards, belies the instrument's ability to produce sonorous and melodic sounds that can range from commanding and authoritative to hauntingly beautiful. Often considered the backbone of low-frequency harmony, the tuba's commanding presence ensures it stands as a stalwart guardian of the musical landscape.</p>
												<a href="" class="btn btn-outline-success btn-sm">Read More</a>
												<a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
											</div>
									</div>
								</div>
								<div class="col-lg-4 mb-4">
									<div class="card">
										<img data-tilt src="{{asset('dash/img/holders/joshua-woroniecki-hyxNfA4Dgt8-unsplash.jpg')}}" alt="" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">A Choir</h5>
											<p class="card-text">A choir, a harmonious assembly of voices, epitomizes the collective beauty of human sound. Comprising a diverse group of individuals, each with their unique vocal timbre, choirs create a tapestry of melodies and harmonies that can evoke profound emotions and stir the soul. Whether performing sacred hymns in a reverent cathedral, lending their voices to classical masterpieces in a grand concert hall, or infusing contemporary music with their enchanting harmonies, choirs have the remarkable ability to transport listeners to a realm of pure auditory bliss. The unity of purpose and shared passion for vocal artistry bond choir members as they come together to produce music that transcends boundaries, resonates with the human spirit, and leaves an indelible mark on the hearts of all who have the privilege of listening.</p>
											<a href="" class="btn btn-outline-success btn-sm">Read More</a>
											<a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					</div>


					

					<!-- <div class="row">
						<div class="col-12 col-lg-12 col-xxl-12 d-flex">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">Loan Details Available</h5>
								</div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>#</th>
											<th>Loan ID</th>
											<th class="d-none d-xl-table-cell">Application Date</th>
											<th class="d-none d-xl-table-cell">Start Date</th>
											
											<th class="d-none d-xl-table-cell">Loan Amount</th>
											<th class="d-none d-xl-table-cell">Monthly Instalments</th>
											<th>Balance</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Project Apollo</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td class="d-none d-xl-table-cell">15,000</td>
											<td class="d-none d-xl-table-cell">15,000</td>
											<td>120</td>
											<td><span class="badge bg-success">Done</span></td>
											<td>
                                                <a href="#" class="btn btn-success"> <i class="align-middle" data-feather="eye"></i></a>
                                                <a href="#" class="btn btn-primary"> <i class="align-middle" data-feather="printer"></i></a>
												
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Project Fireball</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td class="d-none d-xl-table-cell">15,000</td>
											<td class="d-none d-xl-table-cell">15,000</td>
											<td>120</td>
											<td><span class="badge bg-danger">Cancelled</span></td>
											<td>
                                                <a href="#" class="btn btn-success"> <i class="align-middle" data-feather="eye"></i></a>
                                                <a href="#" class="btn btn-primary"> <i class="align-middle" data-feather="printer"></i></a>
												
											</td>
										</tr>
										
										<tr>
											<td>3</td>
											<td>Project Nitro</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td class="d-none d-xl-table-cell">15,000</td>
											<td class="d-none d-xl-table-cell">15,000</td>
											<td>120</td>
											<td><span class="badge bg-warning">In progress</span></td>
											<td>
                                                <a href="#" class="btn btn-success"> <i class="align-middle" data-feather="eye"></i></a>
                                                <a href="#" class="btn btn-primary"> <i class="align-middle" data-feather="printer"></i></a>
												
											</td>
										</tr>
										
										
									</tbody>
								</table>
							</div>
						</div>
						
					</div> -->

				</div>
			</main>
@endsection
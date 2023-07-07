@extends('musicians.inc.master')

@section('title','Dashboard')

@section('content')

<main class="content">
<div class="container-fluid p-0">

<h1 class="h3 mb-3">View Music Page</h1>

<div class="row">
	<div class="col-md-4 col-xl-3">
		<div class="card mb-3">
			<div class="card-header">
				<h5 class="card-title mb-0">Music Details</h5>
			</div>
			<div class="card-body text-center">
				<img src="dash/img/avatars/avatar-4.jpg" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128">
				<h5 class="card-title mb-0">Christina Mason</h5>
				<div class="text-muted mb-2">Lead Developer</div>

				<div>
					<a class="btn btn-primary btn-sm" href="#">Follow</a>
					<a class="btn btn-primary btn-sm" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg> Message</a>
				</div>
			</div>
			<hr class="my-0">
			<div class="card-body">
				<h5 class="h6 card-title">Skills</h5>
				<a href="#" class="badge bg-primary mr-1 my-1">HTML</a>
				<a href="#" class="badge bg-primary mr-1 my-1">JavaScript</a>
				<a href="#" class="badge bg-primary mr-1 my-1">Sass</a>
				<a href="#" class="badge bg-primary mr-1 my-1">Angular</a>
				<a href="#" class="badge bg-primary mr-1 my-1">Vue</a>
				<a href="#" class="badge bg-primary mr-1 my-1">React</a>
				<a href="#" class="badge bg-primary mr-1 my-1">Redux</a>
				<a href="#" class="badge bg-primary mr-1 my-1">UI</a>
				<a href="#" class="badge bg-primary mr-1 my-1">UX</a>
			</div>
			<hr class="my-0">
			<div class="card-body">
				<h5 class="h6 card-title">About</h5>
				<ul class="list-unstyled mb-0">
					<li class="mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home feather-sm mr-1"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Lives in <a href="#">San Francisco, SA</a>
					</li>

					<li class="mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase feather-sm mr-1"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg> Works at <a href="#">GitHub</a></li>
					<li class="mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin feather-sm mr-1"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> From <a href="#">Boston</a></li>
				</ul>
			</div>
			<hr class="my-0">
			<div class="card-body">
				<h5 class="h6 card-title">Elsewhere</h5>
				<ul class="list-unstyled mb-0">
					<li class="mb-1"><span class="fas fa-globe fa-fw mr-1"></span> <a href="#">staciehall.co</a></li>
					<li class="mb-1"><span class="fab fa-twitter fa-fw mr-1"></span> <a href="#">Twitter</a></li>
					<li class="mb-1"><span class="fab fa-facebook fa-fw mr-1"></span> <a href="#">Facebook</a></li>
					<li class="mb-1"><span class="fab fa-instagram fa-fw mr-1"></span> <a href="#">Instagram</a></li>
					<li class="mb-1"><span class="fab fa-linkedin fa-fw mr-1"></span> <a href="#">LinkedIn</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="col-md-8 col-xl-9">
		<div class="card">
			<div class="card-header">

				<h5 class="card-title mb-0">Activities</h5>
			</div>
			<iframe src="https://docs.google.com/viewer?url=http://www.pdf995.com/samples/pdf.pdf&embedded=true" frameborder="0" height="700px" width="100%"></iframe>
		</div>
	</div>
</div>

</div>
			</main>
@endsection
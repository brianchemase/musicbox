@extends('musicians.inc.master')

@section('title','Dashboard')

@section('content')

<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Submit My Music Contribution</h1>
					@if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
					<div class="alert-message">
						<strong>{{ $message }}</strong> 
					</div>
				</div>
				@endif

				@if (count($errors) > 0)
				<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
					<div class="alert-message">
						<strong>
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
						</strong> 
					</div>
				</div>	
				
				@endif

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Guide</h5>
								</div>
								<div class="card-body">
								<h5 class="card-title mb-0">Use here to upload and share your music contribution to the platform. You can attach the score, or parts if you have them as separate files.<br><br> Remember to lable the Titles correctly to match your uploaded file.</h5>
								</div>
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-12">
							
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Music Submission</h5>
									<h5 class="card-subtitle text-muted">Kindly fill in the information of the music you are currently sharing.</h5>
								</div>
							
								<div class="card-body">
								<form class="row g-3" method="POST" action="{{ route('storeSubmission') }}" enctype="multipart/form-data">
									@csrf
									<div class="col-md-4">
										<label for="validationDefault01" class="form-label">Music Title *</label>
										<input type="text" class="form-control" id="validationDefault01" name="title" placeholder="Enter title" required>
										<input type="hidden" class="form-control" id="validationDefault01" name="uploader" Value="systemadmin">
									</div>
									<div class="col-md-4">
										<label for="validationDefault02" class="form-label">Music Composer *</label>
										<input type="text" class="form-control" id="validationDefault02" name="composer" placeholder="Enter composer" required>
									</div>
									<div class="col-md-4">
										<label for="validationDefaultUsername" class="form-label">Music Arranger *</label>
										<input type="text" class="form-control" id="validationDefaultUsername" name="arranger" placeholder="Enter arranger" required>
									</div>
									<div class="col-md-3">
										<label for="validationDefault03" class="form-label">Music Type *</label>
										<input type="text" class="form-control" id="validationDefault03" name="type" placeholder="Enter type" required>
									</div>
									<div class="col-md-3">
											<label for="validationDefault04" class="form-label">Music Type *</label>
											<select class="form-select" id="validationDefault04" name="type" required>
												<option selected disabled value="">Choose...</option>
												<option value="Arrangement">Arrangement</option>
												<option value="Chorus">Chorus</option>
												<option value="Choir">Choir</option>
												<option value="other">Other</option>
											</select>
										</div>
									<div class="col-md-3">
										<label for="validationDefault04" class="form-label">Music No #</label>
										<input type="text" class="form-control" id="validationDefault04" name="No" placeholder="Enter No" >
									</div>
									<div class="col-md-3">
										<label for="validationDefault05" class="form-label">Year composed </label>
										<input type="text" class="form-control" id="validationDefault05" name="year" placeholder="Enter year">
									</div>
									<div class="col-4">
										<label for="validationDefault06" class="form-label">Attach Music File in PDF *</label>
										<input type="file" class="form-control" id="validationDefault06" name="pdf_file" required>
									</div>
									<div class="col-12">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
											<label class="form-check-label" for="invalidCheck2">
												Agree to terms and conditions
											</label>
										</div>
									</div>
									<div class="col-12">
										<button class="btn btn-primary" type="submit">Submit Submission</button>
									</div>
								</form>
							</div>

						

							</div>

						
						</div>
					</div>

				</div>
			</main>
@endsection
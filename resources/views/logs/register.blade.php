<!doctype html>
<html lang="en">
  <head>
  	<title>Music Box</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="auth/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Music Box</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(auth/images/bg-2.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Register account</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
					<form method="POST" action="{{ route('register') }}" class="signin-form">
					@if(Session::has('success'))
						<div class="alert alert-success">{{Session::get('success')}}</div>
					@endif
					@if(Session::has('fail'))
						<div class="alert alert-danger">{{Session::get('fail')}}</div>
					@endif
					@csrf

                    
                          <div class="form-group mt-3">
			      			<input type="text" class="form-control" required>
			      			<label class="form-control-placeholder" name="name" value="{{ old('name') }}" for="names">Full Names</label>
			      		</div>

                          

                        <div class="form-group mt-3">
			      			<input type="text" class="form-control" required>
			      			<label class="form-control-placeholder" name="email" value="{{ old('email') }}" for="email">Email Address</label>
			      		</div>

                          <div class="form-group mt-3">
			      			<input type="text" class="form-control" required>
			      			<label class="form-control-placeholder" name="phone" value="{{ old('phone') }}" for="phone">Phone no (country code)</label>
			      		</div>


                          <div class="form-group mt-3">
			      			<input type="text" class="form-control" required>
			      			<label class="form-control-placeholder" name="country" value="{{ old('country') }}" for="username">Country</label>
			      		</div>

						  <div class="form-group mt-3">
						  <select class="form-control" name="country1" value="{{ old('country1') }}">
						  		<option value="" ></option>
								@foreach ($countries as $country)
									<option value="{{ $country->country_id }}">  {{ $country->country_name }}</option>
								@endforeach
							</select>
							<label class="form-control-placeholder" for="username">Country</label>
						</div>


			      		<div class="form-group mt-3">
			      			<input type="text" class="form-control" required>
			      			<label class="form-control-placeholder" name="position" value="{{ old('position') }}" for="positon">Position</label>
			      		</div>

                        <div class="form-group">
                            <input id="password-field" type="password" class="form-control"  name="password" required>
                            <label class="form-control-placeholder" for="password">Password</label>
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>

                        <div class="form-group">
                            <input id="password-field" type="password" class="form-control" name="password_confirmation" required>
                            <label class="form-control-placeholder" for="password">Confirm Password</label>
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Register</button>
                        </div>
		            <div class="form-group d-md-flex">
		            	
		            </div>
		          </form>
		          <p class="text-center">Already a member? <a  href="{{route('loginAcc')}}">Sign in</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="auth/js/jquery.min.js"></script>
  <script src="auth/js/popper.js"></script>
  <script src="auth/js/bootstrap.min.js"></script>
  <script src="auth/js/main.js"></script>

	</body>
</html>


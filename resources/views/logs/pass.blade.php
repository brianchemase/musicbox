<!doctype html>
<html lang="en">
  <head>
  	<title>Music Box</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
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
						<div class="img" style="background-image: url(auth/images/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Forgot Pass </h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
					<form method="POST" action="{{ route('changepassword') }}" class="signin-form" >
					@if(Session::has('success'))
							<div class="alert alert-success">{{Session::get('success')}}</div>
						@endif

						@if($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif

						@if(session('status'))
							<div class="alert alert-danger">{{ session('status') }}</div>
						@endif
								@csrf
			      		<div class="form-group mt-3">
			      			<input type="email" class="form-control" name="email" required>
			      			<label class="form-control-placeholder" for="username">Email</label>
			      		</div>
		            
						<div class="form-group">
							<button type="submit" class="form-control btn btn-primary rounded submit px-3">Recover Pass</button>
						</div>
		          
		          </form>
		          <p class="text-center">Got your password? <a href="{{route('loginAcc')}}">Sign in</a></p>
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


@extends('musicians.inc.mastertable')

@section('title','Dashboard')

@section('content')

<main class="content">
				<div class="container-fluid p-0">

				<h1 class="h3 mb-3"><strong>Music Box</strong> Users Table</h1>
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

					<!-- <div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Empty card</h5>
								</div>
								<div class="card-body">
								</div>
							</div>
						</div>
					</div> -->

					<div class="card">
								<div class="card-header">
									<h5 class="card-title">Users In the System</h5>
									<h6 class="card-subtitle text-muted">This Shows the available users in the system</h6>
								</div>
								<div class="card-body">
									<table id="datatables-buttons" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Email</th>
												<th>Country</th>
												<th>Position</th>
												<th>Role</th>
												<th>Registered At</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($users as $user)
												<tr>
													<td>{{ $user->id }}</td>
													<td>{{ $user->name }}</td>
													<td>{{ $user->email }}</td>
													<td>{{ $user->country }}</td>
													<td>{{ $user->position }}</td>
													<td>{{ $user->role }}</td>
													<td>{{ $user->created_at->format('Y-m-d H:i:s') }}</td>
													<td> 
													<a href="#viewAgentModal{{$user->id}}" title="View Client" data-toggle="modal" class="btn btn-success"><i class="fa fa-eye"></i> </a> 
													<a href="#editUserModal{{$user->id}}" title="Edit User" data-toggle="modal" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
													<a href="#changePasswordModal{{$user->id}}" title="Change Password" data-toggle="modal" class="btn btn-primary"><i class="fa fa-key"></i></a>

														@include('musicians.modals.modal')
													</td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>

				</div>
				
			</main>
@endsection
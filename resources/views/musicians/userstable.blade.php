@extends('musicians.inc.mastertable')

@section('title','Dashboard')

@section('content')

<main class="content">
				<div class="container-fluid p-0">

				<h1 class="h3 mb-3"><strong>Music Box</strong> Users Table</h1>

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
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>

				</div>
				
			</main>
@endsection
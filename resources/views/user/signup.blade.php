@extends ('layouts.master')

@section ('content')
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1>Sign Up</h1>
			@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors as $error)
						<p>{{ $error }}</p>
					@endforeach
				</div>
			@endif
			<form action="{{ route('user.signup') }}" method="Post">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" id="email" class="form-control" name="email">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" id="password" class="form-control" name="password">
				</div>
				<div class="form-group">
					<label for="password_confirmation">Confirm Password</label>
					<input type="password" id="password_confirmation" class="form-control" name="password_confirmation">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Sign Up</button>
				</div>
			</form>
			
		</div>
	</div>
@endsection
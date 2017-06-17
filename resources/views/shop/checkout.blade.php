@extends('layouts.master')

@section('title')
	Laravel Shopping Cart
@endsection

@section('content')
	<div class="row">
		<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
			<h1>Checkout</h1>
			<h4>Your Total: ${{ $total }}</h4>
			<form action="{{ route('checkout') }}" method="POST" id="checkout-form">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-sx-12">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" id="name" class="form-control" required>
						</div>
					</div>
					<div class="col-sx-12">
						<div class="form-group">
							<label for="Address">Address</label>
							<input type="text" id="Address" class="form-control" required>
						</div>
					</div>
					<div class="col-sx-12">
						<div class="form-group">
							<label for="card-name">Card Holder Name</label>
							<input type="text" id="card-name" class="form-control" required>
						</div>
					</div>
					<div class="col-sx-12">
						<div class="form-group">
							<label for="card-number">Credit Card Number</label>
							<input type="text" id="card-number" class="form-control" required>
						</div>
					</div>
					<div class="col-sx-12">
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label for="card-expire-month">Expiration month</label>
									<input type="text" id="card-expire-month" class="form-control" required>
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label for="card-expire-year">Expiration year</label>
									<input type="text" id="card-expire-year" class="form-control" required>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sx-12">
						<div class="form-group">
							<label for="card-cvc">CVC</label>
							<input type="text" id="card-cvc" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
					<button type="submit" class="btn btn-success">Buy now</button>	
				</div>
				</div>

			</form>
		</div>
	</div>
@endsection
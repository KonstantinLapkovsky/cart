@extends('layouts.master')

@section('title')
	Laravel Shopping Cart
@endsection

@section('content')
	<div class="row">
		<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
			<h1>Checkout</h1>
			<h4>Your Total: ${{ $total }}</h4>
			<div id="charge-message" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}">
				{{ Session::get('error') }}
			</div>
			<form action="{{ route('checkout') }}" method="POST" id="checkout-form">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-sx-6">
						<div class="form-group">
							<label for="zip">Post ZIP</label>
							<span id="zip" class="form-control" required></span>
						</div>
					</div>
					<div class="col-sx-6">
						<div class="form-group">
							<label for="card-number">Credit Card Number</label>
							<span id="card-number" class="form-control" required></span>
						</div>
					</div>
					<div class="col-sx-6">
						<div class="form-group">
							<input type="hidden" name="stripeToken" id="stripeToken" class="form-control">
						</div>
					</div>
					<div class="col-sx-6">
						<div class="form-group">
							<label for="card-expiry">Expiration date</label>
							<span id="card-expiry" class="form-control" required></span>
						</div>
					</div>
					<div class="col-sx-12">
						<div class="form-group">
							<label for="card-cvc">CVC</label>
							<span id="card-cvc" class="form-control" required>
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

@section('scripts')
	<script src="https://js.stripe.com/v3/"></script>
	<script src="{{ URL::to('js/checkouts.js') }}"></script>
@endsection
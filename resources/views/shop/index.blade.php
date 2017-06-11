@extends('layouts.master')

@section('title')
	Laravel Shopping Cart
@endsection

@section('content')
	<div class="row">
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="http://img12.nnm.me/2/4/b/b/0/26b6437fff5d254040902099186.jpg" alt="Хокинг!" class="img-responsive" style="max-height: 150px;">
	      <div class="caption">
	        <h3>Product title</h3>
	        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet molestiae quia debitis ipsum laboriosam, repudiandae autem nobis unde. Distinctio repellendus ratione placeat doloribus quaerat commodi odio asperiores voluptates, accusamus numquam.</p>
	        <div class="clearfix">
	        <div class="pull-left price">
	        	$12
	        </div>
	        	<a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
@endsection
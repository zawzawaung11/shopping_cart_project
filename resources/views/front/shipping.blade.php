@extends('layouts.front')

@section('content')
			<div class="container">
			 <div class="row">
			<div class="col-md-6">
			<form class="form-horizontal" action="/checkout/shipping" method="post" >
			{{csrf_field()}}
			  <div class="form-group">
				<label class="control-label col-sm-2">Adress:</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="name" placeholder="Enter address">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2" >City:</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="city" placeholder="Enter City">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2" >Postal:</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="postal" placeholder="Enter Postal">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2">Phone:</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
				</div>
			  </div>

			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-success">Make Payment</button>
				</div>
			  </div>
			</form>
			</div>
			  </div>
			  </div>
@endsection

	
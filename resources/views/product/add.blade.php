@extends('layouts.app')

@section('content')
<div class="container">
<div class="panel panel-default">
  <div class="panel-heading">Add New Product</div>
  <div class="panel-body">
  <form class="form-horizontal" action="/product/store" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
   <div class="row">
  <div class="col-md-6">
  <div class="form-group">
    <label class="control-label col-sm-2" >Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="Enter product name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" >Description:</label>
    <div class="col-sm-10">
     <textarea class="form-control" rows="2" name="description"></textarea>
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" >Category:</label>
    <div class="col-sm-10">
							<select name="category" class="form-control">
							  <option value="men">Men</option>
							  <option value="women">Women</option>
							  <option value="kids">Kids</option>
							</select>
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" >Price:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="price" placeholder="Enter price name">
    </div>
  </div>
  
      <div class="form-group">
    <label class="control-label col-sm-2" >Photo:</label>
    <div class="col-sm-10">
      <input type="file" name="photo" >
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
	  <a href="/dashboard" class="btn btn-default" role="button">Back</a>
    </div>
  </div>
</form>
    </div>
</div>
  </div>
</div>
@endsection
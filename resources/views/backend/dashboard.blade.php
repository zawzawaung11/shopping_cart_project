@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
	
	<div class="col-md-3">

		  <div class="panel panel-default">
		  <div class="panel-heading">Welcome <b>{{ Auth::user()->name }}</div>
		  <div class="panel-body">
  		  <ul class="list-group list-group-flush">
				<li class="list-group-item"><a href="/dashboard">Product List</a></li>
				<li class="list-group-item"><a href="/product/add">Add Product</a></li>
			  </ul>
			  </div>
			</div>
			
			
		<div class="panel panel-default">
		  <div class="panel-heading">Search</div>
		  <div class="panel-body">		
			<form class="form-search" method="post" action="/product/search">
			{{csrf_field()}}
			<div class="input-append">
				<input type="text" class="input-medium search-query" name="search" placeholder="Search" value="">
				<button type="submit" class="add-on"><i class="fa fa-search"></i></button>
			</div>
			</form>
			  </div>
			</div>							
	</div>
	
        <div class="col-md-9">

		<table class="table table-striped">
			<thead>
			  <tr>
				 <th scope="col">#</th>
				  <th scope="col">Photo</th>
				  <th scope="col">Name</th>
				  <th scope="col">Category</th>
				  <th scope="col">Price</th>
				  <th scope="col">Action</th>
			  </tr>
			</thead>
			<tbody>
			<?php $i = -4; $skipped = $data->currentPage() * $data->perPage(); ?>
			 @foreach($data as $product)
			  <tr>
			 <th scope="row">
					{{ $skipped + $i }}
			<?php $i++; ?>
				  </th>
				  <td><img src="{{asset('uploads/thumb/'.$product->photo)}}" /></td>
				  <td>{{$product->name}}</td>
				  <td>{{$product->category}}</td>
				  <td>{{number_format($product->price,2)}} $</td>
				  
				 <td>

				  <a href="/product/edit/{{$product->id}}">	
				  <i class="fa fa-edit mr-3"></i>
				  </a>
				  
				  <a href="/product/delete/{{$product->id}}" class="del">	
				  <i class="fa fa-trash"></i>
				  </a>  

				  
				  </td>
			  </tr>
			@endforeach
			</tbody>
		  </table>
		{{ $data->links() }}
        </div>
    </div>
</div>
@endsection
@section('extra-script')
<script>  
$(document).ready(function(){
  $(".del").click(function(){
    if (!confirm("Do you want to delete this item?")){
      return false;
    }
  });
});
</script>
@endsection

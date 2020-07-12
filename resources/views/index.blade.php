@extends('layouts.front')

@section('content')
<div class="container">
 <div class="row">
 
@foreach($data as $product) 
    <div class="col-md-3">
      <div class="thumbnail">

          <img src="{{asset('uploads/origin/'.$product->photo)}}" alt="Lights" style="width:100%">
          <div class="caption">
            <p>{{$product->name}}</p>
			<p><b>{{number_format($product->price,2)}} $</b></p>
		 
		 <a href="/cart/create/{{$product->id}}"><button class="btn btn-sm btn-success"><i class="fa fa-shopping-cart"></i> Add to Cart </button></a>
          </div>
     
      </div>
    </div>
@endforeach
  </div>
 </div>
@endsection

  

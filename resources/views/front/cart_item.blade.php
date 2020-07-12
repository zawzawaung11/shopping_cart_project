@extends('layouts.front')

@section('content')

<div class="container">
    <div class="row">
	
	 <div class="col-md-9">
		<table class="table table-hover">
			<thead>
			  <tr>
				<th>Item Name</th>
				<th>Qty</th>
				<th>Price</th>
				<th></th>
			  </tr>
			</thead>
			<tbody>
             @foreach($data as $item) 
				   <tr>
                            <td>{{$item->name}}</td>
							<form action="/cart/edit/{{$item->rowId}}" method="post">
							{{csrf_field()}}
                            <td><input type="text" name="qty" value="{{$item->qty}}" style="width:50px;"/>
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> </button>
							</td>
							</form>
							 <td>{{$item->price}}</td>
                            <td class="text-right"><a href="/cart/delete/{{$item->rowId}}"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button></a></td>
                        </tr>
		     @endforeach



			</tbody>
		  </table>
	 </div>	  
	 
	  <div class="col-md-4">
		  	<table class="table table-bordered">
			<tbody>
			<tr>
			<th>Sub Total :</th>
			<th class="text-right">{{Cart::subtotal()}}</th>
			</tr>
			<tr>
			<th>Tax Total :</th>
			<th class="text-right">{{Cart::tax()}}</th>
			</tr>
			<tr>
			<th>Total :</th>
			<th class="text-right">{{Cart::total()}}</th>
			</tr>
			</tbody>
		    </table>
    </div>
	
		  <div class="col-md-12">
		  <a href="/"><button class="btn btn-sm btn-primary">Continue Shopping</button></a>
		  <a href="/checkout/shipping"><button class="btn btn-sm btn-success">Check Out</button></a>
		    </div>
	
        </div>

</div>

@endsection
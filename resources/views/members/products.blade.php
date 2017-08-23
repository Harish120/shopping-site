@extends('members.main')
@section('content')
<div  class='panel panel-default'>
<div class='panel-heading'>
	<h4>Products</h4>
</div>
<div class='panel-body'>
<table class="table table-bordered">
		<thead>
			<tr>
				<th>SN</th>
				<th>Product Name</th>
				<th>Category</th>
				<th>Image</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($products as $key=>$product)
			<tr>
				<td>{{++$key}}</td>
				<td>{{$product->name}}</td>
				<td>{{$product->category->name}}</td>]
				<td class="col-sm-2"><img src="{{URL::asset('uploads/product/'.(count($product->productimage)>0?$product->productimage->first()->image:'no-image.jpeg'))}}" class="img-responsive"></td>
				<td>
					<a href="{{url('members/edit/'.$product->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
					<a href="{{url('members/delete/'.$product->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
		<tfoot></tfoot>
		
	</table>
<div>
</div>
	
@endsection
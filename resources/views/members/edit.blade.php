@extends('members.main')
@section('content')
<form class="form-horizontal" action="{{url('members/update')}}" method="post">
{{csrf_field()}}
	<div class="form-group">
		<label for="name" class="col-sm-2 comtrol-label">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
		</div>
	</div>

	<div class="form-group">
		<label for="price" class="col-sm-2 comtrol-label">Price</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="price" name="price" value="{{$product->price}}">
		</div>
	</div>

	<div class="form-group">
		<label for="description" class="col-sm-2 comtrol-label">Description</label>
		<div class="col-sm-10">
			<textarea class="form-control" name="description">{{$product->description}}</textarea>
		</div>
	</div>

	<div class="form-group">
		<label for="category" class="col-sm-2 comtrol-label">Category</label>
		<div class="col-sm-10">
			<select name="category_id">
				@foreach($categories as $category)
				<option value="{{$category->id}}" @if($category->id == $product->category_id) {{ 'selected' }} @endif >{{$category->name}}</option>
				@endforeach
			</select>
		</div>
	</div>

	<div class="form-group">
		<label for="description" class="col-sm-2 comtrol-label">Expiry Date</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="expiry_date" name="expiry_date" value="{{$product->expiry_date}}">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Save</button>
		</div>
	</div>
	<input type="hidden" name="id" value="{{$product->id}}">
</form>
@endsection
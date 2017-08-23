@extends('members.main')
@section('content')
<form class="form-horizontal" action="{{url('members/save')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
	<div class="form-group">
		<label for="name" class="col-sm-2 comtrol-label">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="Name">
		</div>
	</div>

	<div class="form-group">
		<label for="price" class="col-sm-2 comtrol-label">Price</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="price" name="price" placeholder="Price">
		</div>
	</div>

	<div class="form-group">
		<label for="description" class="col-sm-2 comtrol-label">Description</label>
		<div class="col-sm-10">
			<textarea class="form-control" name="description"></textarea>
		</div>
	</div>

	<div class="form-group">
		<label for="category" class="col-sm-2 comtrol-label">Category</label>
		<div class="col-sm-10">
			<select name="category_id">
				@foreach($categories as $category)
				<option value="{{$category->id}}">{{$category->name}}</option>
				@endforeach
			</select>
		</div>
	</div>

	<div class="form-group">
		<label for="description" class="col-sm-2 comtrol-label">Expiry Date</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="expiry_date" name="expiry_date" placeholder="Exp Date">
		</div>
	</div>

	<div class="form-group">
		<label for="image" class="col-sm-2 comtrol-label">Image</label> 
		<div class="col-sm-10">
			<input type="file" class="form-control" id="image" name="image">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Save</button>
		</div>
	</div>
	
</form>
@endsection
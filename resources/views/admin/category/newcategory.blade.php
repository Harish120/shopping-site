@extends('admin.main')
@section('content')
<form class="form-horizontal" action="{{url('admin/savecategory')}}" method="post">
{{csrf_field()}}
	<div class="form-group">
		<label for="name" class="col-sm-2 comtrol-label">Category Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="Category Name" >
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Save</button>
		</div>
	</div>
	

</form>
@endsection
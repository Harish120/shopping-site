@extends('admin.main')
@section('add')
<a href="{{url('admin/newcategory')}}">
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary">Add category</button>
		</div>
	</div>
</a>


@endsection
@section('content')
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>S.N</th>
				<th>Category Name</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($categories as $key=>$category)
			<tr>
				<td>{{++$key}}</td>
				<td>{{$category->name}}</td>
				<td>{{$category->status}}</td>
				<td>
					<a href="{{url('admin/editcategory/'.$category->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
					<a href="{{url('admin/deletecategory/'.$category->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
		<tfoot></tfoot>
		
	</table>
@endsection
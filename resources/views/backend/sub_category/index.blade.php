@extends('backend.layouts.master')
@section('title','Sub Category')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-sm-12">
	<a href="{{route('subcatg.create')}}" class="btn btn-info">Create</a>
	<table class="table table-stripped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Category Name</th>
				<th>Main Category</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		@foreach($subcatg as $row)
		<tr>
		<td>{{$row->id}}</td>
		<td>{{$row->name}}</td>
		<td>{{$row->maincatg->name}}</td>
		<td><form class="delete" action="{{route('subcatg.destroy',$row->id)}}" method="post">
				{{csrf_field()}}
				{{method_field('delete')}}
				<button class="btn btn-danger">Delete</button>
				</form></td>
		</tr>
		@endforeach
		</tbody>
	</table>
    </div>
  </div>
</section>
@endsection
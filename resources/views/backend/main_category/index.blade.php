@extends('backend.layouts.master')
@section('title','Main Category')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-sm-12">
	<a href="{{route('maincatg.create')}}" class="btn btn-info">Create</a>
	<table class="table table-stripped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Category Name</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		@foreach($category as $row)
			<tr>
				<td>{{$row->id}}</td>
				<td>{{$row->name}}</td>
				<td>
				<form class="delete" action="{{route('maincatg.destroy',$row->id)}}" method="post">
				{{csrf_field()}}
				{{method_field('delete')}}
				<button class="btn btn-danger">Delete</button></td>
				</form>
			</tr>
		@endforeach
		</tbody>
	</table>
    </div>
  </div>
</section>
@endsection
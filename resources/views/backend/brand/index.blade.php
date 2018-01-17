@extends('backend.layouts.master')
@section('title','Brand')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-12">
	<h1>this is brand</h1>
	<a href="{{route('brand.create')}}" class="btn btn-info">Create</a>	
	<table class="table table-stripped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Brand Name</th>
				<th>Category</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		@foreach($brands as $row)
		<tr>
			<td>{{$row->id}}</td>
			<td>{{$row->brand_name}}</td>
			<td>{{$row->subcatg->name}}</td>
			<td>
				{!!Form::open(['method'=>"post",'route'=>['brand.destroy',$row->id]])!!}
				{{csrf_field()}}
				{{method_field('delete')}}
				{!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}
			</td>
		</tr>
		@endforeach
		</tbody>
	</table> 
    </div>
  </div>
</section>
@endsection
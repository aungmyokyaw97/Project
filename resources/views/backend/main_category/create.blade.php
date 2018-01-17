@extends('backend.layouts.master')
@section('title','Create Main Category')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-sm-12 col-md-12">
	{!!Form::open(array('route'=>'maincatg.store','method'=>'POST'))!!}
	{!!csrf_field()!!}
	<div class="form-group">
		{!!Form::label('category','Category Name')!!}
		{!!Form::text('name',null,['placeholder'=>'Enter Category Name','class'=>'form-control'])!!}
	</div>
	{!!Form::submit('Save',['class'=>'btn btn-info'])!!}
	{!!Form::close()!!}
    </div>
  </div>
</section>
@endsection
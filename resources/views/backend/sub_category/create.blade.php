@extends('backend.layouts.master')
@section('title','Create Sub Category')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-sm-12 col-md-12">
			{!! Form::open(array('route'=>'subcatg.store','method'=>'post','class'=>'form-group')) !!}
			{!! csrf_field() !!}
			<div class="form-group">
				{!! Form::label('category','Category Name') !!}
				{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter Category Name']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('categorys','Choose Category') !!}
				{!! Form::select('maincatg_id', $maincatg, null, ['class' => 'form-control']) !!}
			</div>
			{!! Form::submit('Save',['class'=>'btn btn-info']) !!}

			{!! Form::close() !!}
		</div>
	</div>
</section>
@endsection


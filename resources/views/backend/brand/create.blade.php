@extends('backend.layouts.master')
@section('title','Brand Create')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-md-12">
			{!!Form::open(['method'=>'post','route'=>'brand.store'])!!}
			{{csrf_field()}}
			<div class="form-group">
				{!!Form::label('brand_name','Brand Name')!!}
				{!!Form::text('brand_name',null,['class'=>'form-control','placeholder'=>'Enter Brand'])!!}
			</div>
			<div class="form-group">
				<label for="maincatg_id">Choose Category</label>

				<select id='maincatg_id' name="maincatg_id" class="form-control">

					<option value="0" disabled="true" selected="true">--Select--</option>

					@foreach($maincatg as $key => $value)

					<option value= "{{ $key }}" > {{$value}}</option>

					@endforeach

				</select>
			</div>
			<div class="form-group">

				<label for="subcatg_id">Choose SubCategory</label>

				<select name="subcatg_id" id="subcatg_id" class="form-control">

					<option value="0" disabled="true" selected="true">--Select--</option>

				</select>
			</div>
			{!!Form::submit('Save',['class'=>'btn btn-info pull right'])!!}
			{!!Form::close()!!}
		</div>
	</div>
<script>
	$(document).ready(function(){
		$('#maincatg_id').on('change',function() {
			var sub_id = $(this).val();
			var sub = $('#subcatg_id');
			sub.empty();
			var op = " ";
			$.ajax({
				type:'get',
				url:'{!!URL::to("find/subcatg")!!}',
				data:{'id': sub_id},
				success:function(data){
					op+='<option value="0" selected disabled>--Select--</option>';
					for(var i=0;i<data.length;i++){
						op+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
					}
					sub.html(op);
				},
				error:function(){

				}
			});
		});	
	});
</script>
</section>
@endsection
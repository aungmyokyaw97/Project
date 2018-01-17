@extends('backend.layouts.master')
@section('title','Product')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-md-12">

			<form method="post" enctype="multipart/form-data" action="{{route('product.store')}}">
				{{csrf_field()}}
				<div class="form-group">
					<label>Product Name</label>
					<input type="text" name="name" class="form-control">

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
				<div class="form-group">

					<label for="brand_id">Choose Brand</label>

					<select name="brand_id" id="brand_id" class="form-control">
						
						<option value="0" disabled="true" selected="true">--Select--</option>

					</select>
				</div>
				<span id="log">
					
				</span>
				<div class="form-group">
					<input type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" value="Add"">

					<div id="btn_" class="modal fade bs-example-modal-lg" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
						
						<div class="modal-dialog modal-lg" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;" role="document">
							
							<div class="modal-content" >
							
								<div class="modal-header">
							
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">Gallery</h4>
						
								</div>
						
								<div class="modal-body">
									<div style="width: 100%">

										<ul class="nav nav-tabs panel panel-default" role="tablist">
											<li role="presentation" class="active"><a href="#product" aria-controls="product" role="tab" data-toggle="tab">Product</a></li>
											<li role="presentation"><a href="#brand" aria-controls="brand" role="tab" data-toggle="tab">Brand</a></li>

										</ul>
						
									</div>
						
									<div class="tab-content">
										<!-- product image -->
										<div role="tabpanel" class="tab-pane active" id="product">
											<ul class="med">
											 @foreach($media as $row)

												<li class="medi"><input name="photo_id[]" type="checkbox" class="ch" id="{{$row->id}}" value="{{$row->id}}" />
													<label class="medl" for="{{$row->id}}"><img src="/images/product/{{$row->file}}" alt="img" style="width: 80px; height: 80px; padding: 3px;">
													</label>
												</li>
							
											@endforeach
											</ul>
										</div>
										<input type="button" id="btn_" value="submit" data-dismiss="modal"/>
										<!-- brand image -->
										<div role="tabpanel" class="tab-pane" id="brand">   
										</div>
										<!-- end-body -->
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="submit" class="upload-button btn btn-default pull-right">Save</button>

									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<br>
					<button type="submit" class="btn btn-info">Save</button>
				</form>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#maincatg_id').on('change',function() {
				var cat_id = $(this).val();
				var sub = $('#subcatg_id');
				sub.empty();
				var op = " ";
				$.ajax({
					type:'get',
					url:'{!!URL::to("find/subcatg")!!}',
					data:{'id': cat_id},
					success:function(data){
						op+='<option value="0" selected disabled>--Select--</option>';
						for(var i=0;i<data.length;i++){
							op+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
						}
						sub.html(op);
					},
					error:function(){
						console.log('error');
					}
				});
			});
			$('#subcatg_id').on('change',function(){
				var sub_id = $(this).val();
				var brand = $('#brand_id');
				brand.empty();
				var op = " ";
				console.log(sub_id);
				$.ajax({
					type:'get',
					url:'{!!URL::to("find/brand")!!}',
					data:{'id': sub_id},
					success:function(data){
						op+='<option value="0" selected disabled>--Select--</option>';
						for(var i=0;i<data.length;i++){
							op+='<option value="'+data[i].id+'">'+data[i].brand_name+'</option>';
						}
						console.log(data);
						brand.html(op);
					},
					error:function(){
						console.log('error');
					}
				});
			});	
		});
		

		// function select(element) {
		// 	element.onclick = function() {
		// 		element.classList.toggle('selected');
		// 	}
		// }
		// Array.from(document.getElementsByClassName('selectable')).forEach(select);
		// $(document).ready(function(){
			
		// 	var img = $('#sh');
		// 	img.empty();
		// 	$("#cl").click(function(){
		// 		img.html(x);
		// 	});
		// });
		$("#btn_").on('click', function () {
			var checkbox_value = "";
			$(":checkbox").each(function () {
				var ischecked = $(this).is(":checked");
				if (ischecked) {
					checkbox_value += $(this).val()+"|";
				}
			});
			var lo = $('#log');
			lo.empty();
			var fileName = checkbox_value.split("|").slice(0,-1);
			for(var i=0;i<fileName.length;i++){
				lo.append("<img style='padding:5px;' src='/images/product/"+fileName[i]+"'>");
			}
			var fil =$('#fil');
			fil.empty();
			fil = fileName;
}); 
</script>
@endsection
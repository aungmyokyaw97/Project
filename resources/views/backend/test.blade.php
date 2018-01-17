<section class="content">
	<div class="row">
		<div class="col-md-12">

			<h1>this is create product</h1>

			<form method="post">

				<div class="form-group">

					<input type="text" class="form-control">

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

				
					

					<select name="subcatg_id" id="subcatg_id" class="subcatg_id">
						
					</select>
				
			</form>
		</div>
	</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#maincatg_id').on('change',function() {
			var cat_id = $(this).val();
			var div =$(this).parent();
			var selectbox = $('#subcatg_id');
			selectbox.empty();
			var op ="";
			$.ajax({
				type:'get',
				url:'{!!URL::to("findcatg")!!}',
				data:{'id': cat_id},
				success:function(data){
					console.log('success');
					console.log(data);
					op+='<option value="0" selected disabled>choose</option>';
					for(var i=0;i < data.length;i++){
					op+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
					}
					selectbox.html(op);
					//div.find('.subcatg_id').append(op);
					console.log(op);

				},
				error:function(){

				}
			});
			});
			
			
		
	});
</script>
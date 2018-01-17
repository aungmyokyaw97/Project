@extends('backend.layouts.master')
@section('title','Media')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-sm-12">
	<form id="target" method="post" action="{{route('media.store')}}" enctype="multipart/form-data">
		 {{ csrf_field() }}
		<input type="file" name="file[]" id='fil' multiple>	
	</form>
    @foreach($media as $row)
	<img src="images/product/{{$row->file}}" alt="img" style="height: 80px;width: 100px;padding: 5px;">
    @endforeach
    </div>
  </div>
   <script>
  $(document).ready(function(){
  $('#fil').change(function() {
  $('#target').submit();
});
});
  </script>
</section>

@endsection
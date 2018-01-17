@extends('backend.layouts.master')
@section('title','Product')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-12">
	<h1>this is product</h1>
	<a href="{{route('product.create')}}" class="btn btn-info">Create</a>
    </div>
  </div>
</section>
@endsection
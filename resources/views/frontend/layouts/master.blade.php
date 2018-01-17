<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/default.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/component.css')}}" />

  <link rel="stylesheet" type="text/css" href="{{asset('css/modus.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

  <!-- Bootstrap -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-3 col-xs-3 text-center padding-5">
        <img src="{{asset('images/photos/Logo.png')}}" class="img-responsive img-rounded img-center" alt="Responsive image">
      </div>
      <div class="col-md-8 col-sm-5  col-xs-5">
        <div class="input-group margin-top-20">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-4 padding-20">
        <select class="selectpicker height-35">
          <option title="Combo 1">Myanmar</option>
          <option title="Combo 2">English</option>
        </select>
      </div>
    </div><!-- /.row -->
@include('frontend.layouts.nav')
@yield('content')
@include('frontend.layouts.footer')
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>

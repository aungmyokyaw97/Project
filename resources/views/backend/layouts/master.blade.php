<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Backend - @yield('title')</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style>
    .modal-dialog{
      overflow-y: initial !important
    }
    #product{
      height: 300px;
      overflow-y: auto;
    }
    .med {
      list-style-type: none;
      padding-left: 20px;
    }

    .medi {
      display: inline-block;
    }

    .ch{
      display: none;
    }

    .medl {
      border: 1px solid #fff;
      padding: 10px;
      display: block;
      position: relative;
      margin: 5px;
      cursor: pointer;
    }

    .medl:before {
      background-color: white;
      color: white;
      content: " ";
      display: block;
      border-radius: 50%;
      border: 1px solid grey;
      position: absolute;
      top: -5px;
      left: -5px;
      width: 25px;
      height: 25px;
      text-align: center;
      line-height: 28px;
      transition-duration: 0.4s;
      transform: scale(0);
    }

    .medl img {
      height: 100px;
      width: 100px;
      transition-duration: 0.2s;
      transform-origin: 50% 50%;
    }

    :checked + .medl {
      border-color: #ddd;
    }

    :checked + .medl:before {
      content: "✓";
      background-color: grey;
      transform: scale(1);
    }

    :checked + .medl img {
      transform: scale(0.9);
      box-shadow: 0 0 5px #333;
      z-index: -1;
    }
   
    #log img{
      width: 80px;
      height: 80px;
    }
  </style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    @include('backend.layouts.header')
    @include('backend.layouts.sidebar')
    <div class="content-wrapper">
      <section class="content-header">
          <!-- <h1>@yield('title')<small>...</small>
        </h1> -->
        <ol class="breadcrumb">
          <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">@yield('title')</li>
        </ol>
      </section>
      @yield('content')
    </div>
    @include('backend.layouts.footer')
  </div>
</div>
<script>
  $('#product').scroll(function() {
    if($(this).scrollTop() + $(this).innerHeight() >= this.scrollHeight) {

    }
  });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{asset('js/jquery.min.js')}}" charset="utf-8"></script>
<script src="{{asset('js/adminlte.min.js')}}" charset="utf-8"></script>
<script src="{{asset('js/bootstrap.min.js')}}" charset="utf-8"></script>
</body>
</html>

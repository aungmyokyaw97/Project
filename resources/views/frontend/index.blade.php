@extends('frontend.layouts.master')
@section('content')
<div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">

         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="{{asset('images/carousel/img_1.jpg')}}" alt="...">
              <div class="carousel-caption">
                ...
              </div>
            </div>
            <div class="item">
              <img src="{{asset('images/carousel/img_2.jpg')}}" alt="...">
              <div class="carousel-caption">
                ...
              </div>
            </div>

            <div class="item">
              <img src="{{asset('images/carousel/img_3.jpg')}}" alt="...">
              <div class="carousel-caption">
                ...
              </div>
            </div>
            <!--  ... -->
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>


      </div>

    </div>

    <!--End of  carousel-->


    <!--Start of Content-->

    <!--Hearder-1-->


    <!--Start of First row-->

    <div class="row">
      <div class="col-md-12  col-sm-12 col-xs-12  margin-top-40 margin-btm-20">

        <h2>New Arrival Products</h2>

      </div> 
    </div>

    <div class="row">

      <div class="col-md-3 col-sm-6 col-xs-12">


       <div class="thumbnail">
        <a href="{{route('view')}}"><img src="{{asset('images/photos/products/1.jpg')}}" alt="..."></a>
         <div class="caption product-info text-center">
          <h4>Product Name</h4>

          <div class="pro-ratting">
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
          </div>

          <h3 class="pro-price"> 35000-Ks</h3>
        </div>


      </div>


    </div>


    <div class="col-md-3 col-sm-6 col-xs-12">

       <div class="thumbnail">
        <a href="view.html"><img src="{{asset('images/photos/products/2.jpg')}}" alt="..."></a>
         <div class="caption product-info text-center">
          <h4>Product Name</h4>

          <div class="pro-ratting">
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
          </div>

          <h3 class="pro-price"> 35000-Ks</h3>
        </div>


      </div>



  </div>


  <div class="col-md-3 col-sm-6 col-xs-12">

   <div class="thumbnail">
     <a href="view.html"><img src="{{asset('images/photos/products/3.jpg')}}" alt="..."></a>
     <div class="caption product-info text-center">
      <h4>Product Name</h4>

      <div class="pro-ratting">
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
      </div>

      <h3 class="pro-price"> 35000-Ks</h3>
    </div>


  </div>



</div>

<div class="col-md-3 col-sm-6 col-xs-12">

<div class="thumbnail">
        <a href="view.html"><img src="images/photos/products/4.jpg" alt="..."></a>
         <div class="caption product-info text-center">
          <h4>Product Name</h4>

          <div class="pro-ratting">
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
          </div>

          <h3 class="pro-price"> 35000-Ks</h3>
        </div>


      </div>




</div>
</div>

<!--End of First row-->

<!--Start of Second row-->

   <div class="row">
      <div class="col-md-12  col-sm-12 col-xs-12  margin-top-20 margin-btm-20">

        <h2>Best Seller Products</h2>

      </div> 
    </div>

    <div class="row">

      <div class="col-md-3 col-sm-6 col-xs-12">


       <div class="thumbnail">
        <a href="view.html"><img src="images/photos/products/5.jpg" alt="..."></a>
         <div class="caption product-info text-center">
          <h4>Product Name</h4>

          <div class="pro-ratting">
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
          </div>

          <h3 class="pro-price"> 35000-Ks</h3>
        </div>


      </div>


    </div>


    <div class="col-md-3 col-sm-6 col-xs-12">

       <div class="thumbnail">
        <a href="view.html"><img src="images/photos/products/6.jpg" alt="..."></a>
         <div class="caption product-info text-center">
          <h4>Product Name</h4>

          <div class="pro-ratting">
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
          </div>

          <h3 class="pro-price"> 35000-Ks</h3>
        </div>


      </div>



  </div>


  <div class="col-md-3 col-sm-6 col-xs-12">

   <div class="thumbnail">
     <a href="view.html"><img src="images/photos/products/7.jpg" alt="..."></a>
     <div class="caption product-info text-center">
      <h4>Product Name</h4>

      <div class="pro-ratting">
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
      </div>

      <h3 class="pro-price"> 35000-Ks</h3>
    </div>


  </div>



</div>

<div class="col-md-3 col-sm-6 col-xs-12">

<div class="thumbnail">
        <a href="view.html"><img src="images/photos/products/1.jpg" alt="..."></a>
         <div class="caption product-info text-center">
          <h4>Product Name</h4>

          <div class="pro-ratting">
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
          </div>

          <h3 class="pro-price"> 35000-Ks</h3>
        </div>


      </div>




</div>
</div>
<!--End of Second row-->



<!--End of  Content-->


@endsection
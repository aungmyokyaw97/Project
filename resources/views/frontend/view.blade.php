@extends('frontend.layouts.master')
@section('content')

<div class="row margin-btm-20 padding-left-50">

      <div class="col-md-8 col-sm-7 col-xs-12 margin-btm-5">

        <a href="{{route('hom')}}" style="text-decoration: none;">Home</a> >

        <a href="index.html" style="text-decoration: none;">Links-1</a> >   
        <a href="#" style="text-decoration: none;">Links-2</a>  >  
        <a href="#" style="text-decoration: none;">Links-3</a> >  
        <a href="#" style="text-decoration: none;">Links-4</a>

      </div>



      <div class="col-md-4 col-sm-5 col-xs-12">

        <select class="form-control">
          <option>Item-1</option>
          <option>Item-2</option>
          <option>Item-3</option>
          <option>Item-4</option>
          <option>Item-5</option>
        </select>

      </div>

    </div>

    <!--End of Link Bar-->



    <!--Start of Content-->

    <div class="row">
      <div class="col-md-2 col-sm-4 col-xs-12">

        <div>
         <div class="col-md-12 col-sm-12 col-xs-4">

          <div class="thumbnail">

            <img src="images/photos/pic_1.jpg" alt="...">
          </div>

        </div>

        <div class="col-md-12 col-sm-12 col-xs-4">
          <div class="thumbnail">
            <img src="images/photos/pic_1.jpg" alt="...">
          </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-4">

          <div class="thumbnail">
            <img src="images/photos/pic_1.jpg" alt="...">
          </div>
        </div>

      </div>



    </div>



    <div class="col-md-4 col-sm-8 col-xs-12">

     <div class="thumbnail">
      <img src="images/photos/pic_1.jpg" alt="...">
      <div class="caption">
        <h3>label</h3>
        <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime recusandae quaerat expedita numquam ex cumque distinctio architecto....

       </p>
       <p>

        <a href="view.html" class="btn btn-primary" role="button">Buy</a> 
        <a href="#" class="btn btn-default" role="button">Cart</a>

      </p>

    </div>
  </div>

</div>

@endsection
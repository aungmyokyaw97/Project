<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('images/avatar.png')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="{{route('dashboard')}}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="{{route('product.index')}}">
          <i class="fa fa-files-o"></i>
          <span>Product</span>
         
        </a>
      </li>
      <li>
        <a href="{{route('maincatg.index')}}">
          <i class="fa fa-th"></i> <span>Main Category</span>
        </a>
      </li>
      <li>
        <a href="{{route('subcatg.index')}}">
          <i class="fa fa-th"></i> <span>Sub Category</span>
        </a>
      </li>
         <li>
        <a href="{{route('brand.index')}}">
          <i class="fa fa-th"></i> <span>Brands</span>
        </a>
      </li>
       <li>
        <a href="{{route('media.index')}}">
          <i class="fa fa-th"></i> <span>Media</span>
        </a>
      </li>
    </ul>
  </section>
</aside>

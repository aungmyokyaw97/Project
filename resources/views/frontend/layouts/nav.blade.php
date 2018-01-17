 <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12 text-center">

        <nav class="navbar navbar-default">

          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

              <ul class="nav navbar-nav">

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Computer</a>
                  <ul class="dropdown-menu">
                    <li><a href="{{route('phone')}}">Laptop</a></li>
                    <li><a href="#">Note Book</a></li>
                    <li><a href="#">Mac Book</a></li>
                    <li><a href="#">Destop</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"> All Computer Accessories</a></li>

                  </ul>


                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Phone</a>
                  <ul class="dropdown-menu">
                    <li><a href="phone.html">Android Phone</a></li>
                    <li><a href="#">Smart Phone</a></li>
                    <li><a href="#">IOS Phone</a></li>
                    <li><a href="#">Mobile Phone</a></li>
                    <li><a href="#">Window Phone</a></li>

                    <li role="separator" class="divider"></li>
                    <li><a href="#"> All Mobile Accessories</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Game</a>
                  <ul class="dropdown-menu">
                    <li><a href="phone.html">Game</a></li>

                    <li role="separator" class="divider"></li>
                    <li><a href="#">All Game Accessories</a></li>
                  </ul>
                </li>
              </ul>



              <ul class="nav navbar-nav navbar-right">


                <li><a href="#">Profile</a></li>




                <li class="dropdown">

                  <a href="http://phpoll.com/login" class="dropdown-toggle" data-toggle="dropdown">Sign In <span class="caret"></span></a>


                  <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu">
                    <div class="col-lg-12">
                      <div class="text-center">
                        <h3>Sign In</h3></div>


                        <form id="ajax-login-form" action="http://phpoll.com/login/process" method="post" role="form" autocomplete="off">
                          <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off">
                          </div>

                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" autocomplete="off">
                          </div>

                          <div class="form-group">
                            <div class="row">
                              <div class="col-xs-12">
                                <input type="checkbox" tabindex="3" name="remember" id="remember">

                                <label for="remember"> Remember Me</label>

                              </div>
                              <div class="col-xs-7 pull-right">


                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In">


                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="text-center">
                                  <a href="#" tabindex="5" class="forgot-password" style="text-decoration: none;">Forgot Password?</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <input type="hidden" class="hide" name="token" id="token" value="a465a2791ae0bae853cf4bf485dbe1b6">
                        </form>
                      </div>

                      <div class="row">
                        <div class="col-lg-12 margin-btm-5">
                          <div class="text-center">
                            <a href="#" tabindex="5" class="forgot-password" style="text-decoration: none;">Regeister</a>
                          </div>
                        </div>
                      </div>
                    </ul>
                  </li>


                  <li><a href="#" <span class="glyphicon glyphicon-shopping-cart font-25"></span></a></li>
                </ul>


              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>



        </div>


      </div>


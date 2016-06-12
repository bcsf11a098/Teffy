<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TEFFY</title>
   
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="/bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet">
     <link href="/css/myStyle.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="/jQuery/myJquery.js" > </script>

    <script src="/bootstrap-3.3.6/js/bootstrap.min.js"></script>
        <script src="/jQuery/jquery-2.2.1.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}



</head>

<body id="app-layout">
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top inside-nav">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" 
                    data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    @if (Auth::guest())
                    <a class="navbar-brand" href="/">
                        <img src="/images/teffy.png" style="width:120px ; height:72px ; margin-top:-31px">
                    </a>
                    @else
                    <a class="navbar-brand" href="/home">
                        <img src="/images/teffy.png" style="width:120px ; height:72px ; margin-top:-31px">
                    </a>
                    @endif
                    
                </div>
                <div class="col-sm-3 col-md-3 pull-right ">
                  <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control input-sm" placeholder="Search" name="search">
                        <div class="input-group-btn">
                            <button class="btn btn-default btn-sm" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                  </form>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                     @if (!Auth::guest())
                    
                    @endif
                    <!-- Right Side Of Navbar -->
                    
                        <!-- Authentication Links -->
                        
                          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <div class="col-sm-3 col-md-3 pull-right ">
                            
                                <ul class="nav navbar-nav">
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Browse<b class="caret"></b></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#">Merchandise</a></li>
                                    <li><a href="#">Cars</a></li>
                                    <li><a href="#">Rentals</a></li>
                                    <li><a href="#">Real Estate</a></li>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Pets</a></li>
                                    <li><a href="#">Tickets</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Others</a></li>
                                  </ul>
                                </li>
                                <li><button class="btn btn-link post-btn" data-toggle="modal" data-target="#myModal" style="padding-top:17px">Post</button></li>
                                @if (Auth::guest())
                                <li><a href="{{ url('/login') }}">Signin</a></li>
                                @else
                                 <li class="dropdown">
                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->fname }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/showUpdatePage') }}"><i 
                                        class="fa fa-btn fa-reset">
                                        </i>Account Setting</a></li> 
                                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                    </ul>
                                </li>
                              @endif
                              </ul>
                            </div>
                          </div>
                       
                            
                    
                </div>
            </div>
        </nav>
      
      <!--   <div class = 'row'>
          <div class = "col-md-10 col-md-offset-1">
              <nav class="navbar navbar-default below-navbar" role="navigation">
                <div class="col-md-4"><h4>EveryOne nearby</h4></div>
              </nav>
          </div>
        </div>
 -->
        @if (Auth::guest())
          @yield('content1')
         @elseif(Request::is('/'))
         <script type="text/javascript">
            window.location="{{URL::to('/home')}}";
         </script>
         @endif
         @yield('content')
     
        <footer class="panel-footer">Teffy.com</footer>
    </div>
    <!-- JavaScripts -->
    </body>
    </html>
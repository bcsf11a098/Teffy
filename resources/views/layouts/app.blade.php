<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Friend's</title>
   
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
                    <a class="navbar-brand" href="#">
                        TEFFY
                    </a>
                </div>
                <div class="col-sm-3 col-md-3 pull-right ">
                  <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
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
                        @if (Auth::guest())
                          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <div class="col-sm-3 col-md-3 pull-right ">
                            
                                <ul class="nav navbar-nav">
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Browse<b class="caret"></b></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#">Category1</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Category2</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Category3</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Category4</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Category5</a></li>
                                  </ul>
                                </li>
                                <li class=""><a href="#">Post</a></li>
                                <li><a href="{{ url('/login') }}">Signin</a></li>
                                
                              </ul>
                            </div>
                          </div>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/showUpdatePage') }}"><i 
                                    class="fa fa-btn fa-reset">
                                    </i>Account Setting</a></li> 
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endif
                    
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
          @yield('content')
         @elseif(Request::is('/'))
         <script type="text/javascript">
            window.location="{{URL::to('/home')}}";
         </script>
         @endif
          
         
        <div class="panel-footer">Teffy.com</div>
    </div>
    <!-- JavaScripts -->
    </body>
    </html>
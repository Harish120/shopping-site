
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{url('members/myads')}}">My Ads</a></li>
                        <li><a href="{{url('members/new')}}">New Ad</a></li>
                        <li><a href="{{url('members/profile')}}">Profile</a></li>
                        <li><a href="{{url('members/messages')}}">Messages</a></li>
                </ul>
            
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    @if(Auth::user()->role==1)
                                    <li>
                                        <a href="">Admin</a>
                                    </li>
                                    @endif
                                    @if(Auth::user()->role==2)
                                    <li>
                                        <a href="{{url('members')}}">Member</a> 
                                    </li>
                                    @endif
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            </div>
        </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <div class="dropdown
                +">
                 <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" value="">Select Category</button>
                 <div class="dropdown-menu" role="menu">
                <div class="list-group">
                
                @foreach($categories as $category)
                    <a href="#" class="list-group-item">{{$category->name}}</a>
                @endforeach
                </div>
                </div>
                </div>
            </div>

            <div class="col-md-12">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4Gzta-_aNBzrE5c4a9_rbW88aDX0bGzB8J0uKf_11DAMhSY0l" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwKgGcySVyJO_LI5EqIpnJf0vj-Xg81jdMIUDCHNBRyXUZTsdM" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDs8ZVEzKofyhq7pDsUNHHvC4gjxyhRjSQjrozJ3_aV8dZYXQZ" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="https://cf-catman.infibeam.net/img/m1/banners/8841726/c1e2ba470beee_appleiphone7.png.999xx.png" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                    </div>

                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:5px;">
                    <tr> 
                      <td id="dblue" width="8" height="22" bgcolor="#5E5E8A">&nbsp;</td>
                      <td id="lblue" bgcolor="#C6C6D9"><font color="#FFFFFF" size="3" face="Arial, Helvetica, sans-serif"><strong>&nbsp;<font color="#000000">Featured 
                        Ads</font> </strong></font></td>
                    </tr>
                  </table>
                 @foreach($products as $product)
                <div class="row">

                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="{{URL::asset('uploads/product/'.(count($product->productimage)>0?$product->productimage->first()->image:'no-image.png'))}}" class="img-responsive" />
        
                            <div class="caption">
                                <h4 class="pull-right"><o>Rs.</o>{{$product->price}}</h4>
                                <h4><a href="#"><span>{{$product->name}}</span></a>
                                </h4>
                                <p>{{$product->description}}</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                          </div>
                    </div>
                      @endforeach

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

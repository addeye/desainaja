<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Login :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link href="{{ asset('shoppy/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <link href="{{ asset('shoppy/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <!--js-->
    <script src="{{ asset('shoppy/js/jquery-2.1.1.min.js') }}"></script>
    <!--icons-css-->
    <link href="{{ asset('shoppy/css/font-awesome.css') }}" rel="stylesheet">
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <!--static chart-->
</head>
<body>
<div class="login-page">
    <div class="login-main">
        <div class="login-head">
            <h1>Login</h1>
        </div>
        <div class="login-block">
            @include('include.alert')
            <form method="post" action="{{URL('/login')}}">
                {{ csrf_field() }}
                <input type="text" name="email" placeholder="Email" required="">
                <input type="password" name="password" class="lock" placeholder="Password">
                <div class="forgot-top-grids">
                    <div class="forgot-grid">
                        <ul>
                            <li>
                                <input type="checkbox" id="brand1" name="remember">
                                <label for="brand1"><span></span>Remember me</label>
                            </li>
                        </ul>
                    </div>
                    <div class="forgot">
                        <a href="javascript:void(0);" id="forgot">Forgot password?</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <input type="submit" name="Sign In" value="Login">
                <h3>Not a member?<a href="signup.html"> Sign up now</a></h3>
                <h2>or login with</h2>
                <div class="login-icons">
                    <ul>
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </form>
            <h5><a href="{{URL('/')}}">Go Back to Home</a></h5>
        </div>
    </div>
</div>
{{--<!-- Button trigger modal -->--}}
{{--<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">--}}
    {{--Launch demo modal--}}
{{--</button>--}}

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Send your email</h4>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Send Email</button>
            </div>
        </div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
    <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>
<!--COPY rights end here-->

<!--scrolling js-->
<script src="{{ asset('shoppy/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('shoppy/js/scripts.js') }}"></script>
<!--//scrolling js-->
<script src="{{ asset('shoppy/js/bootstrap.js') }}"> </script>
<!-- mother grid end here-->
<script>
    $('document').ready(function(){
        $('#forgot').click(function(){
            $('#myModal').modal().show;
        });
    });
</script>
</body>
</html>


                      
						

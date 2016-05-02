<!DOCTYPE html>
<html>
<head>
    <title>Desain Aja | Home :: Gowonan</title>
    <link href="{{ asset('light/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <!--theme style-->
    <link href="{{ asset('light/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--//theme style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Desain Kaos, desain gratis kaos, desain online" />
    <!-- start menu -->
    <link href="{{ asset('light/css/memenu.css') }}" rel="stylesheet" type="text/css" media="all" />
    @yield('css')
</head>
<body>
<!--header-->

@include('include_light.header')
@yield('slider')
@yield('content')
<!---->
<div class="offers">
    <div class="container">
        <h3>Promo Cuci Gudang</h3>
        <div class="offer-grids">
            <div class="col-md-6 grid-left">
                <a href="#"><div class="offer-grid1">
                        <div class="ofr-pic">
                            <img src="{{ asset('light/images/ofr2.jpeg') }}" class="img-responsive" alt=""/>
                        </div>
                        <div class="ofr-pic-info">
                            <h4>Emergency Lights <br>& Led Bulds</h4>
                            <span>UP TO 60% OFF</span>
                            <p>Shop Now</p>
                        </div>
                        <div class="clearfix"></div>
                    </div></a>
            </div>
            <div class="col-md-6 grid-right">
                <a href="#"><div class="offer-grid2">
                        <div class="ofr-pic-info2">
                            <h4>Flat Discount</h4>
                            <span>UP TO 30% OFF</span>
                            <h5>Outdoor Gate Lights</h5>
                            <p>Shop Now</p>
                        </div>
                        <div class="ofr-pic2">
                            <img src="{{ asset('light/images/ofr3.jpg') }}" class="img-responsive" alt=""/>
                        </div>
                        <div class="clearfix"></div>
                    </div></a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---->
<div class="subscribe">
    <div class="container">
        <h3>Newsletter</h3>
        <form>
            <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
            <input type="submit" value="Subscribe">
        </form>
    </div>
</div>
<!---->
@include('include_light.footer')

<script src="{{ asset('light/js/jquery.min.js') }}"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src="{{ asset('light/js/simpleCart.min.js') }}"> </script>
<script type="text/javascript" src="{{ asset('light/js/memenu.js') }}"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="{{ asset('light/js/responsiveslides.min.js') }}"></script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            pager: false,
        });
    });
</script>
<script src="{{ asset('light/js/bootstrap.js') }}"> </script>
<!-- /start menu -->
@yield('js')
</body>
</html>

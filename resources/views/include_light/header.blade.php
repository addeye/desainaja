<div class="header-top">
    <div class="header-bottom">
        <div class="logo">
            <h1><a href="index.html">DesainAja</a></h1>
        </div>
        <!---->
        <div class="top-nav">
            <ul class="memenu skyblue"><li class="active"><a href="{{ URL('/') }}">Beranda</a></li>
                <li class="grid"><a href="#">Produk</a>
                    <div class="mepanel">
                        <div class="row">
                            <div class="col1 me-one">
                                <h4>Shop</h4>
                                <ul>
                                    <li><a href="{{ URL('produk/') }}">New Arrivals</a></li>
                                    <li><a href="product.html">Home</a></li>
                                    <li><a href="product.html">Decorates</a></li>
                                </ul>
                            </div>
                            <div class="col1 me-one">
                                <h4>Type</h4>
                                <ul>
                                    <li><a href="product.html">Diwali Lights</a></li>
                                    <li><a href="product.html">Tube Lights</a></li>
                                    <li><a href="product.html">Bulbs</a></li>
                                </ul>
                            </div>
                            <div class="col1 me-one">
                                <h4>Popular Brands</h4>
                                <ul>
                                    <li><a href="product.html">Everyday</a></li>
                                    <li><a href="product.html">Philips</a></li>
                                    <li><a href="product.html">Havells</a></li>
                                    <li><a href="product.html">Wipro</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="grid"><a href="{{ URL('desain/') }}">Desain Sendiri</a>
                </li>
                <li class="grid"><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <!---->
        <div class="cart box_1">
            <a href="{{ URL('/keranjang') }}">
                <div class="total">
                    <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div>
                <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
            </a>
            <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
        <!---->
    </div>
    <div class="clearfix"> </div>
</div>
<!---->
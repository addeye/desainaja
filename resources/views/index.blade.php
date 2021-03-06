@extends('layouts.master_light')

@section('slider')
    @include('include_light.slider')
@endsection

@section('promo')
    @include('include_light.promo')
@endsection

@section('content')
    <div class="items">
        <div class="container">
            <div class="items-sec">
                <div class="col-md-3 feature-grid">
                    <a href="product.html"><img src="{{ asset('light/images/img1.jpg') }}" alt=""/>
                        <div class="arrival-info">
                            <h4>Lighting #1</h4>
                            <p>Rs 12000</p>
                            <span class="pric1"><del>Rs 18000</del></span>
                            <span class="disc">[12% Off]</span>
                        </div>
                        <div class="viw">
                            <a href="product.html"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 feature-grid">
                    <a href="product.html"><img src="{{ asset('light/images/img2.jpg') }}" alt=""/>
                        <div class="arrival-info">
                            <h4>Lighting #1</h4>
                            <p>Rs 10000</p>
                            <span class="pric1"><del>Rs 14000</del></span>
                            <span class="disc">[14% Off]</span>
                        </div>
                        <div class="viw">
                            <a href="product.html"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 feature-grid">
                    <a href="product.html"><img src="{{ asset('light/images/img3.jpg') }}" alt=""/>
                        <div class="arrival-info">
                            <h4>Lighting #1</h4>
                            <p>Rs 8500</p>
                            <span class="pric1"><del>Rs 9500</del></span>
                            <span class="disc">[10% Off]</span>
                        </div>
                        <div class="viw">
                            <a href="product.html"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 feature-grid">
                    <a href="product.html"><img src="{{ asset('light/images/img4.jpg') }}" alt=""/>
                        <div class="arrival-info">
                            <h4>Lighting #1</h4>
                            <p>Rs 12000</p>
                            <span class="pric1"><del>Rs 18000</del></span>
                            <span class="disc">[12% Off]</span>
                        </div>
                        <div class="viw">
                            <a href="product.html"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
                        </div>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="items-sec btm-sec">
                <div class="col-md-3 feature-grid">
                    <a href="product.html"><img src="{{ asset('light/images/img5.jpg') }}" alt=""/>
                        <div class="arrival-info">
                            <h4>Lighting #1</h4>
                            <p>Rs 500</p>
                            <span class="pric1"><del>Rs 650</del></span>
                            <span class="disc">[8% Off]</span>
                        </div>
                        <div class="viw">
                            <a href="product.html"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 feature-grid">
                    <a href="product.html"><img src="{{ asset('light/images/img8.jpg') }}" alt=""/>
                        <div class="arrival-info">
                            <h4>Lighting #1</h4>
                            <p>Rs 400</p>
                            <span class="pric1"><del>Rs 750</del></span>
                            <span class="disc">[12% Off]</span>
                        </div>
                        <div class="viw">
                            <a href="product.html"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 feature-grid">
                    <a href="product.html"><img src="{{ asset('light/images/img7.jpg') }}" alt=""/>
                        <div class="arrival-info">
                            <h4>Lighting #1</h4>
                            <p>Rs 800</p>
                            <span class="pric1"><del>Rs 1200</del></span>
                            <span class="disc">[12% Off]</span>
                        </div>
                        <div class="viw">
                            <a href="product.html"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 feature-grid">
                    <a href="product.html"><img src="{{ asset('light/images/img6.jpg') }}" alt=""/>
                        <div class="arrival-info">
                            <h4>Lighting #1</h4>
                            <p>Rs 600</p>
                            <span class="pric1"><del>Rs 1200</del></span>
                            <span class="disc">[50% Off]</span>
                        </div>
                        <div class="viw">
                            <a href="product.html"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
                        </div>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
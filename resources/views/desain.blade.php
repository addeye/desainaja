@extends('layouts.master_light')

@section('css')
    <link href='https://fonts.googleapis.com/css?family=Nosifer|League+Script|Yellowtail|Permanent+Marker|Codystar|Eater|Molle:400italic|Snowburst+One|Shojumaru|Frijole|Gloria+Hallelujah|Calligraffitti|Tangerine|Monofett|Monoton|Arbutus|Chewy|Playball|Black+Ops+One|Rock+Salt|Pinyon+Script|Orbitron|Sacramento|Sancreek|Kranky|UnifrakturMaguntia|Creepster|Pirata+One|Seaweed+Script|Miltonian|Herr+Von+Muellerhoff|Rye|Jacques+Francois+Shadow|Montserrat+Subrayada|Akronim|Faster+One|Megrim|Cedarville+Cursive|Ewert|Plaster' rel='stylesheet' type='text/css'>

    <link href="{{ asset('design/css/api.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('design/css/jquery-ui.css') }}" />
    {{--<link rel="stylesheet" href="{{ asset('design/css/bootstrap.css') }}" />--}}
    {{--<link rel="stylesheet" href="{{ asset('design/css/bootstrap.min.css') }}" />--}}
@endsection

@section('content')
    <div class="row">
        <div class="container">
            <div class="product-price1">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading"><h1><b>Desain Online</b></h1></div>
                        </div>
                        <div class="container design_api_container">
                            <div class='design_api'>
                                <!--=============================================================-->
                                <div id="menu" class="btn-nav">
                                    <div class="menu_option sel_type">
                                    </div>
                                    <div class="menu_option sel_color">
                                        <span class="glyphicon glyphicon-tint"></span>
                                    </div>
                                    <div class="menu_option sel_art">
                                        <span class="glyphicon glyphicon-picture"></span>
                                    </div>
                                    <div class="menu_option sel_custom_icon">
                                        <span class="glyphicon glyphicon-open"></span>
                                    </div>
                                    <div class="menu_option sel_text">
                                        <span class="glyphicon glyphicon-font"></span>
                                    </div>
                                </div>
                                <!--=============================================================-->
                                <div id='options'>
                                    <div class="T_type">
                                        <div id="radio1" ><img src="{{ asset('design/images/product/tee/black/black_front.png') }}" width="100%" height="100%" />
                                        </div>
                                        <div id="radio3" ><img src="{{ asset('design/images/menu_icons/submenu/hoodie.jpg') }}" width="100%" height="100%" />
                                        </div>
                                    </div>

                                    <div class="color_pick">
                                        <div class="color_radio_div" id="red"></div>
                                        <div class="color_radio_div" id="black"></div>
                                        <div class="color_radio_div" id="white"></div>
                                        <div class="color_radio_div" id="navy"></div>
                                        <div class="color_radio_div" id="green"></div>
                                    </div>
                                    <div class="default_samples">


                                        <?php
                                        $dir    = public_path().'/design/images/Images';
                                        $files1 = scandir($dir);
                                        //$files2 = scandir($dir, 1);
                                        foreach ($files1 as &$value) {
                                            if (strpos($value,'.png') !== false) {
                                                //echo 'true';
                                                echo '<div class="sample_icons"><img src="design/images/Images/' .$value. '" width="100%" height="100%" /></div>' ;
                                            }elseif(strpos($value,'.') === false){
                                                //echo '<div class="sample_icons"><img src="tdesignAPI/images/folder.png" width="100%" height="100%" />' .$value. '</div>' ;
                                            }
                                            //echo "Value: $value<br />\n";
                                        }
                                        ?>
                                    </div>
                                    <div class="custom_icon">
                                        <form id="form1" runat="server">
					<span class="btn btn-default btn-file"> Browse
						<input type='file' id="imgInp" />
					</span>

                                        </form>
                                    </div>

                                    <div class="custom_font">

                                        <select id="fs" onchange="changeFont(this.value);">
                                            <option value="arial">Arial</option>
                                            <option value="Nosifer, cursive">Nosifer</option>
                                            <option value="League Script, cursive">League Script</option>
                                            <option value="Yellowtail, cursive">Yellowtail</option>
                                            <option value="Permanent Marker, cursive">Permanent Marker</option>
                                            <option value="Codystar, cursive">Codystar</option>
                                            <option value="'Eater', cursive">Eater</option>
                                            <option value="Molle, cursive">Molle</option>
                                            <option value="Snowburst One, cursive">Snowburst One</option>
                                            <option value="Shojumaru, cursive">Shojumaru</option>
                                            <option value="Frijole, cursive">Frijole</option>
                                            <option value="Gloria Hallelujah, cursive">Gloria Hallelujah</option>
                                            <option value="Calligraffitti, cursive">Calligraffitti</option>
                                            <option value="Tangerine, cursive">Tangerine</option>
                                            <option value="Monofett, cursive">Monofett</option>
                                            <option value="Monoton, cursive">Monoton</option>
                                            <option value="Arbutus, cursive">Arbutus</option>
                                            <option value="Chewy, cursive">Chewy</option>
                                            <option value="Playball, cursive">Playball</option>
                                            <option value="Black Ops One, cursive">Black Ops One</option>
                                            <option value="'Rock Salt', cursive">Rock Salt</option>
                                            <option value=" 'Pinyon Script', cursive">Pinyon Script</option>
                                            <option value="'Orbitron', sans-serif">Orbitron</option>
                                            <option value="'Sacramento', cursive">acramento</option>
                                            <option value="'Sancreek', cursive">Sancreek</option>
                                            <option value="'Kranky', cursive">Kranky</option>
                                            <option value="'UnifrakturMaguntia', cursive">UnifrakturMaguntia</option>
                                            <option value="'Creepster', cursive">Creepster</option>
                                            <option value="'Pirata One', cursive">Pirata One</option>
                                            <option value=" 'Seaweed Script', cursive">Seaweed Script</option>
                                            <option value=" 'Miltonian', cursive">Miltonian</option>
                                            <option value=" 'Herr Von Muellerhoff', cursive">Herr Von Muellerhoff</option>
                                            <option value=" 'Rye', cursive"> 'Rye'</option>
                                            <option value=" 'Jacques Francois Shadow', cursive">Jacques Francois Shadow</option>
                                            <option value=" 'Montserrat Subrayada', sans-serif">Montserrat Subrayada</option>
                                            <option value=" 'Akronim', cursive">Akronim</option>
                                            <option value=" 'Faster One', cursive">Faster One</option>
                                            <option value=" 'Megrim', cursive">Megrim</option>
                                            <option value=" 'Cedarville Cursive', cursive">Cedarville Cursive</option>
                                            <option value=" 'Ewert', cursive">Ewert</option>
                                            <option value="'Plaster', cursive">Plaster</option>
                                            <option value="verdana">Verdana</option>
                                            <option value="impact">Impact</option>
                                            <option value="ms comic sans">MS Comic Sans</option>
                                        </select>
                                        <input type="color" name="favcolor" onChange="changeColor(this.value);" placeholder="Color Name" />
                                        <div class="font_styling">

                                            <span id="bold_button" onclick="b();"><b>B</b></span>
                                            <span id="italic_button" onclick="i();"><i>I</i></span>

                                            <select id="font_size" onchange="changeFontSize(this.value);">
                                                <?php
                                                for($i=10;$i<=140;$i+=2){
                                                ?>

                                                <option value="<?php echo $i; ?>px"><?php echo $i; ?>px</option>
                                                <?php
                                                }
                                                ?>


                                            </select>
                                        </div>
                                        <textarea id="custom_text" placeholder="Create Your Custom Text..."></textarea>
                                        <button type="button" class="btn btn-primary" id="apply_text">
                                            Apply
                                        </button>

                                    </div>
                                </div>
                                <!--=============================================================-->
                                <!--=========================preview start====================================-->
                                <div id='preview_t'>
                                    <div id="preview_front">
                                        <div class="front_print">

                                        </div>
                                    </div>
                                    <div id="preview_back">
                                        <div class="back_print">

                                        </div>
                                    </div>

                                </div>
                                <canvas id="preview_y" style="display: none;">

                                </canvas>
                                <!--=============================================================-->
                                <!--======================view start=======================================-->

                                <div id='view_mode'>
                                    <div  class="mode"><img id="o_front" src="{{ asset('design/images/product/tee/black/black_front.png') }}" width="100%" height="80%" />FRONT
                                    </div>
                                    <div  class="mode"><img id="o_back" src="{{ asset('design/images/product/tee/black/black_back.png') }}" width="100%" height="80%" />BACK
                                    </div>
                                    <div class="mode btn-nav">
                                        <i class="preview_images" id="preview_images" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="glyphicon glyphicon-fullscreen"></span></i> Preview
                                    </div>
                                </div>
                                <!--=====================View Ends========================================-->
                                <div id="overview">
                                    <div class="">

                                        <table class="table">
                                            <tr>
                                                <th>Size</th>
                                                <th>Quantity</th>
                                            </tr>
                                            <tr>
                                                <td><b>S</b></td>
                                                <td>
                                                    <input id="small"  onchange="changeval()" name="small" type="number" value="1" class="form-control small input-md" min=0 max=99999 />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>M</b></td>
                                                <td>
                                                    <input id="medium"  onchange="changeval()" name="medium" type="number" value="0" class="form-control medium input-md" min=0 max=99999 />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>L</b></td>
                                                <td>
                                                    <input id="large" onchange="changeval()"  name="large" type="number" value="0" class="form-control large input-md" min=0 max=99999 />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>XL</b></td>
                                                <td>
                                                    <input id="xlarge"  onchange="changeval()" name="xlarge" type="number" value="0" class="form-control xlarge input-md" min=0 max=99999 />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>XXL</b></td>
                                                <td>
                                                    <input id="xxlarge" onchange="changeval()"  name="xxlarge" type="number" value="0" class="form-control xxlarge input-md" min=0 max=99999 />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Total</b></td>
                                                <td>
                                                    <input id="total" name="total" type="number" value="1" class="form-control total input-md" disabled min=1 max=99999 />
                                                </td>
                                            </tr>

                                        </table>

                                        <button type="button" class="btn btn-primary btn-block preview_images"  data-toggle="modal" data-target=".bs-example-modal-lg">
                                            Proceed
                                        </button>

                                    </div>
                                </div>
                            </div>

                            <!-- Large modal -->
                            <!--
                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content"> -->

                            <div class="layer">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        {{--<a id="downloadFront" class="btn btn-primary btn-xs">--}}
                                            {{--Download Gambar--}}
                                        {{--</a>--}}
                                        <button type="button" class="close close_img" data-dismiss="modal">
                                            <span aria-hidden="true">&times;</span><span class="sr-only close_img">Close</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div id="image_reply"></div>
                                        <div class="modal-footer">
                                            <div class="row">
                                                <form method="POST" enctype="multipart/form-data" id="imageFileForm" action="{{URL('/order')}}">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <div class="col-md-1">
                                                        <button type="button" class="btn btn-default close_img" data-dismiss="modal">
                                                            Close
                                                        </button>
                                                    </div>
                                                    <div class="col-md-2">
                                                        Price : -
                                                    </div>

                                                    <div class="col-md-6">
                                                        <center>
                                                            <table class="table">

                                                                <tr>
                                                                    <td><b>S</b></td>
                                                                    <td><b>M</b></td>
                                                                    <td><b>L</b></td>
                                                                    <td><b>XL</b></td>
                                                                    <td><b>XXL</b></td>
                                                                    <td><b>Total</b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input id="small2" onchange="changeval2()"  name="small" type="number" value="0" class="form-control small input-md" min=0 max=99999 />
                                                                    </td>

                                                                    <td>
                                                                        <input id="medium2" onchange="changeval2()"  name="medium" type="number" value="0" class="form-control medium input-md" min=0 max=99999 />
                                                                    </td>

                                                                    <td>
                                                                        <input id="large2" onchange="changeval2()"  name="large" type="number" value="0" class="form-control large input-md" min=0 max=99999 />
                                                                    </td>

                                                                    <td>
                                                                        <input id="xlarge2" onchange="changeval2()"  name="xlarge" type="number" value="0" class="form-control xlarge input-md" min=0 max=99999 />
                                                                    </td>

                                                                    <td>
                                                                        <input id="xxlarge2" onchange="changeval2()"  name="xxlarge" type="number" value="0" class="form-control xxlarge input-md" min=0 max=99999 />
                                                                    </td>

                                                                    <td>
                                                                        <input id="total2" name="total" type="number" value="1" class="form-control total input-md" disabled min=1 max=99999 />
                                                                    </td>
                                                                </tr>

                                                        </center>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="hidden" name="img_front" id="img_front" value="" />
                                                        <input type="hidden" name="img_back" id="img_back" value="" />
                                                        <button type="submit" class="btn btn-primary">
                                                            Pesan Sekarang !
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                <div class="clearfix"></div>
                    <div class="col-md-5">
                        <div class="panel">
                            <div class="panel-heading"><h1><b>Keterangan</b></h1></div>
                            <div class="panel-body">
                                <p>Mentapkan sebagai muslim yang baik akan dijakdiakn pedoman</p>
                            </div>
                        </div>
                        <div class="container">
                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Home</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Profile</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                                    </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                        <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                <br>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('design/js/html2canvas.js') }}"></script>
    <script src="{{ asset('design/js/jquery.form.js') }}"></script>
    <script src="{{ asset('design/js/mainapp.js') }}"></script>
    <script src="{{ asset('design/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('design/js/bootstrap.min.js') }}"></script>

    <script type="text/javascript">
        function changeval() {
            $total = parseInt($("#small").val()) + parseInt($("#medium").val()) + parseInt($("#large").val()) + parseInt($("#xlarge").val()) + parseInt($("#xxlarge").val());
            //alert($total);
            $('.small').val($("#small").val());
            $('.medium').val($("#medium").val());
            $('.large').val($("#large").val());
            $('.xlarge').val($("#xlarge").val());
            $('.xxlarge').val($("#xxlarge").val());
            $('.total').val($total);
        }

        function changeval2() {
            $total = parseInt($("#small2").val()) + parseInt($("#medium2").val()) + parseInt($("#large2").val()) + parseInt($("#xlarge2").val()) + parseInt($("#xxlarge2").val());
            //alert($total);
            $('.small').val($("#small2").val());
            $('.medium').val($("#medium2").val());
            $('.large').val($("#large2").val());
            $('.xlarge').val($("#xlarge2").val());
            $('.xxlarge').val($("#xxlarge2").val());
            $('.total').val($total);
        }

        function b() {
            $('#custom_text').toggleClass('bold_text');
            $("#bold_button").toggleClass('box-shadow', '0 0 10px inset #3c3c3c');
        }

        function i() {
            $('#custom_text').toggleClass('italic_text');
        }

        function changeFont(_name) {
            $('#custom_text').css("font-family", _name);
        }

        function changeFontSize(_size) {
            $('#custom_text').css("font-size", _size);
        }

        function changeColor(_color) {
            $('#custom_text').css("color", _color);
        }

        //$('input[type=file]').bootstrapFileInput();
        //$('.file-inputs').bootstrapFileInput();
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    image_icon(e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $("#imgInp").change(function() {
            readURL(this);
        });

//        $('#downloadFront').click(function(){
//            html2canvas($('#image_reply'),
//                    {
//                        onrendered: function (canvas) {
//                            var a = document.createElement('a');
//                            // toDataURL defaults to png, so we need to request a jpeg, then convert for file download.
//                            a.href = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
//                            a.download = 'somefilenameFront.jpg';
//                            a.click();
//                        }
//                    });
//        });

    </script>
@endsection

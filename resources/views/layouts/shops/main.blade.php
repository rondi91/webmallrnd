<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ezone - eCommerce HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="assets/css/icofont.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.css">
        <link rel="stylesheet" href="assets/css/bundle.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- header start -->
        @include('layouts.shops.head')
        <!-- header end -->
		
        <div class="shop-page-wrapper shop-page-padding ptb-100">
            <div class="container-fluid">
                <div class="row">
                    {{-- sidebar start --}}
                        {{-- @include('layouts.shops.sidebar') --}}
                    {{-- sidebar end --}}

                    {{-- conten shop start  --}}

                        @yield('content')
                    {{-- conten shop end  --}}
                    
                </div>
            </div>
        </div>
		{{-- footer start  --}}
            @include('layouts.shops.footer')
		{{-- footer end  --}}
        <!-- modal -->
        
		<!-- modal -->

        <div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="pe-7s-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog modal-compare-width" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="#">
                            <div class="table-content compare-style table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>
                                                <a href="#">Remove <span>x</span></a>
                                                <img src="assets/img/cart/4.jpg" alt="">
                                                <p>Blush Sequin Top </p>
                                                <span>$75.99</span>
                                                <a class="compare-btn" href="#">Add to cart</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="compare-title"><h4>Description </h4></td>
                                            <td class="compare-dec compare-common">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Sku </h4></td>
                                            <td class="product-none compare-common">
                                                <p>-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Availability  </h4></td>
                                            <td class="compare-stock compare-common">
                                                <p>In stock</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Weight   </h4></td>
                                            <td class="compare-none compare-common">
                                                <p>-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Dimensions   </h4></td>
                                            <td class="compare-stock compare-common">
                                                <p>N/A</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>brand   </h4></td>
                                            <td class="compare-brand compare-common">
                                                <p>HasTech</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>color   </h4></td>
                                            <td class="compare-color compare-common">
                                                <p>Grey, Light Yellow, Green, Blue, Purple, Black </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>size    </h4></td>
                                            <td class="compare-size compare-common">
                                                <p>XS, S, M, L, XL, XXL </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"></td>
                                            <td class="compare-price compare-common">
                                                <p>$75.99 </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		
		
		
		
		
		<!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>

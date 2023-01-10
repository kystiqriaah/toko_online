<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOME BY MI</title>
    <meta name="path_role" content="MAIN" />
    <meta name="author" content="SOME BY MI" />
    <meta name="description" content="Pusat perbelanjaan skincare" />
    <link rel="stylesheet" href="assets/css/.css">
    <link rel="stylesheet" href="assets/css/banner.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    
</head>
<body id="main">
    <div id="skipNavigation">
        <p><a href="#category">Produk Lengkap</a></p>
        <p><a href="#contents">Tentang Kami</a></p>
    </div>
    
    <!-- Menu Masuk Teratas/Bilah Pencarian/Logo Kecil/Spanduk Titik -->   
    <div id="top_login_fixed">
        <div class="top_fixed">
            <div id="top_login_fixed_inner">
                <!-- Multishop -->     
                <div id="multishop_wrap"></div>    
                <!-- Logo kecil teratas -->
                <div id="top_logo_small">
                    <a href=""><img src="assets/img/logo.png"/></a>
                </div>

                <!-- Pencarian -->
                <form id="searchBarForm" name="" action="/product/search.html" method="get" target="_self" enctype="multipart/form-data" >
                    <input id="banner_action" name="banner_action" value="" type="hidden"/>
                    <div class="xans-element- xans-layout xans-layout-searchheader ">
                        <fieldset>
                            <legend>Seacrh</legend>
                            <input id="keyword" name="keyword" fw-filter="" fw-label="검색어" fw-msg="" class="inputTypeText" placeholder="" onmousedown="SEARCH_BANNER.clickSearchForm(this)" value="" type="text"/>
                            <input type="image" src="assets/img/search_btn.png" alt="검색" onclick="SEARCH_BANNER.submitSearchBanner(this); return false;"/>
                        </fieldset>
                    </div>
                </form>
                <!-- Keluar dari jendela pencarian -->
                <div class="xans-element- xans-layout xans-layout-statelogoff">
                    <div><a href="">Log in</a></div>
                    <div><a href="">Sign Up</a></div>
                    <div id="my_tip_wrap">
                        <a href="/myshop/index.html">my page</a>
                    </div>
                    
                    <!-- 상단로고 -->    
                    <h1 class="xans-element- xans-layout xans-layout-logotop ">
                        <div><a href="/"><img src="assets/img/logo.png"/></a></div>
                    </h1>
                    
                    <!-- 카테고리 -->    
                    <div id="top_fixed">
                        <div class="top_cate">
                            <div id="category-basic" class="xans-element- xans-layout xans-layout-category">
                                <div class="position">
                                    <ul class="ct01-wrap">
                                        <li data-param="?cate_no=82" class="ct01 xans-record-">
                                            <a href="/product/list.html?cate_no=82"><strong>MADE ME(당일출고)</strong></a>
                                        </li>
                                        <li data-param="?cate_no=100" class="ct01 xans-record-">
                                            <a href="/product/list.html?cate_no=100">INSTA PRE-ORDER 10%</a>
                                        </li>
                                        <li data-param="?cate_no=42" class="ct01 xans-record-">
                                            <a href="/product/list.html?cate_no=42">NEW 5%</a>
                                        </li>
                                        <!--li><a href="/myshop/regular_delivery.html">정기배송 관리</a></li-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
                
                <!-- basic -->    
                <div id="wrap">
                    <div id="header">
                        <div class="inner">
                            <div class="topArea"></div>
                        </div>
                        </div>
                        <div id="photoslidev2_location_id_0" class="cafe24_app photoslidev2_location"></div>
                        <div id="container">
                            <div id="contents"></div>
                        </div>
                    </div>
                </div>

                <div style="width:1600px;margin:0 auto; padding-bottom:160px">
                    <div app4you-smart-banner="smart-banner-admin-PC00001" app4you-smart-banner-html="true" class="xans-element- xans-smart-banner-admin xans-smart-banner-admin-PC00001">
                        <div data-slider="true" data-type="full" data-mode="fade" data-minslides="1" data-maxslides="10" data-controls="true" data-adaptiveheight="true" data-autohover="true" data-responsive="true" class="smart-banner-wrapper square" data-pager="true" data-auto="true" data-speed="500" data-pause="4000" data-banner-size-width="1600" data-banner-size-height="720">
                            <div class="smart-banner-bx-wrapper">
                                <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 720px;">
                                <ul style="width: auto; position: relative; visibility: visible;" class="smart-banner-bxslider">
                                    <li style="float: none; list-style: none; position: absolute; width: 1600px; z-index: 0; display: none;">
                                        <a href="" target="_self" onclick="APP4YOU_SMART_BANNER.incrementBanner('750179')" ontouchstart="APP4YOU_SMART_BANNER.incrementBanner('750179')" style="cursor:pointer">
                                            <img src="assets/img/banner/Categories4.jpg">
                                        </a>
                                    </li>
                                    <li style="float: none; list-style: none; position: absolute; width: 1600px; z-index: 0; display: none;">
                                        <a href="" target="_self" onclick="APP4YOU_SMART_BANNER.incrementBanner('728276')" ontouchstart="APP4YOU_SMART_BANNER.incrementBanner('728276')" style="cursor:pointer">
                                            <img src="assets/img/banner/Categories5.jpg">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="bx-controls bx-has-pager bx-has-controls-direction">
                                <div class="bx-pager bx-default-pager">
                                    <div class="bx-pager-item">
                                        <a href="" data-slide-index="0" class="bx-pager-link">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">One</font>
                                            </font>
                                        </a>
                                    </div>
                                    <div class="bx-pager-item">
                                        <a href="" data-slide-index="1" class="bx-pager-link"> 
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">2</font>
                                            </font>
                                        </a>
                                    </div>
                                    <div class="bx-pager-item">
                                        <a href="" data-slide-index="2" class="bx-pager-link">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">3</font>
                                            </font>
                                        </a>
                                    </div>
                                    <div class="bx-pager-item"><a href="" data-slide-index="3" class="bx-pager-link">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">4</font>
                                        </font></a>
                                    </div>
                                    <div class="bx-pager-item">
                                        <a href="" data-slide-index="4" class="bx-pager-link">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">5</font>
                                            </font>
                                        </a>
                                    </div>
                                    <div class="bx-controls-direction">
                                        <a class="bx-prev" href=""></a>
                                        <a class="bx-next" href=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid banner d-flex align-items-center">
        <!-- carousel -->
        <div class="container ">
            <div class="row">
                <div class="col">
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/banner/Categories4.jpg" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/banner/Categories5.jpg" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/banner/Categories6.jpg" class="d-block w-100" alt="">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>  
        <!-- 메인배너 -->
    </div>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Slick JS -->    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <!-- Our Script -->
    <script>
        $(document).ready(function(){
            console.log('Im ready');
        });
    </script>
    
<!-- 메인진열상품 -->    
<!-- 메인_컨텐츠_시작 -->  
</body>
</html>
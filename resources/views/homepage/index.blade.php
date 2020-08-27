@extends('welcome')
@section('titlepage','Jaya Ban - Toko Online Jual Ban Murah di Medan')
<?php $y = Date('Y'); ?>
@section('deschomepage','Beli UPVC terdekat di Medan dan di Jakarta berkualitas dengan harga murah terbaru '.$y.' di
euroupvc.co.id! Pembayaran mudah, pengiriman Mobil cepat, desain bisa custom!')
@section('content')
<!-- Inspiro Slider -->
<div id="slider" class="inspiro-slider dots-creative" data-height-xs="360" data-autoplay="2600" data-animate-in="fadeIn"
    data-animate-out="fadeOut" data-items="1" data-loop="true" data-autoplay="true">
    <div class="slide" style="background-image:url('{!!asset('images/sliding/1.jpg')!!}');">
        <div class="container">
            <div class="slide-captions text-left">
                <!-- Captions -->
                <h2 class="text-lg">Cara baru <br>temukan ban mobil<br>dengan mudah</h2>
                <a class="btn btn-light" href="#">Shop Now</a>
                <a class="btn btn-light btn-outline" href="#ourcollection">View
                    Collection</a>
                <!-- end: Captions -->
            </div>
        </div>
    </div>
    <div class="slide" style="background-image:url('{!!asset('images/sliding/2.jpg')!!}');">
        <div class="container">
            <div class="slide-captions text-left">
                <!-- Captions -->
                <h2 class="text-lg text-dark">Harga spesial<br>di setiap pembelian ban </h2>
                <a class="btn btn-light" href="#">Shop Now</a>
                <a class="btn btn-light btn-outline" href="#ourcollection">View
                    Collection</a>
                <!-- end: Captions -->
            </div>
        </div>
    </div>
    <div class="slide" style="background-image:url('{!!asset('images/sliding/3.jpg')!!}');">
        <div class="container">
            <div class="slide-captions text-left">
                <!-- Captions -->
                <h2 class="text-lg">GRAND SALE</h2>
                <a class="btn btn-light" href="#">Shop Now</a>
                <a class="btn btn-light btn-outline" href="#ourcollection">View
                    Collection</a>
                <!-- end: Captions -->
            </div>
        </div>
    </div>
</div>
<!--end: Inspiro Slider -->
<section class="p-t-60 p-b-30 text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <a href="#">
                    <img src="{!!asset('media/iklan/1.jpg')!!}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-lg-6">
                <a href="#">
                    <img src="{!!asset('media/iklan/2.jpg')!!}" alt="" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- SUMMER SALE -->
<section class="section-pattern p-t-60 p-b-30 text-center"
    style="background: url({!!asset('images/pattern/pattern22.png')!!})">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 text-left">
                <h2 class="text-medium">Opening Grand Sale</h2>
                <p>Pesan ban dengan minimum harga Rp. 2jt, dapatkan pengiriBan Mobil gratis. <a href="#">Baca info
                        selengkapnya</a></p>
            </div>
            <div class="col-lg-7">
                <div class="countdown medium" data-countdown="2020/09/19 11:34:51" data-animate="fadeInUp">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: SUMMER SALE -->

<section id="ourcollection">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-text heading-line text-center">
                    <h4>Our Collection Categories </h4>
                </div>

            </div>
        </div>

        <div class="shop-category">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop-category-box">
                        <a href="#"><img alt="" src="{!!asset('images/katalog/banmobil.jpg')!!}">
                            <div class="shop-category-box-title text-center">
                                <h6>Ban Mobil</h6><small>64 products</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shop-category-box">
                        <a href="#"><img alt="" src="{!!asset('images/katalog/velg.jpg')!!}">
                            <div class="shop-category-box-title text-center">
                                <h6>Velg Mobil</h6><small>36 products</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shop-category-box">
                        <a href="#"><img alt="" src="{!!asset('images/katalog/spareparts.jpg')!!}">
                            <div class="shop-category-box-title text-center">
                                <h6>Spareparts</h6><small>25 products</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shop-category-box">
                        <a href="#"><img alt="" src="{!!asset('images/katalog/shock.jpg')!!}">
                            <div class="shop-category-box-title text-center">
                                <h6>Shock Breaker</h6><small>80 products</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop products -->
<section>
    <div class="container">
        <div class="heading m-b-40">
            <h4>Produk Ban Mobil</h4>
        </div>
        <!--Product list-->
        <div class="shop">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://cdn.ceat.com/images/tyre/model/zoom/Milaze(Suv)3.png">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium//82/MTA-2445102/ssr_velg-mobil-rep--ssr-type-c-ring-15_full02.jpg">
                            </a>
                            <span class="product-new">NEW</span>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>

                        <div class="product-description">
                            <div class="product-category">Velg Mobil</div>
                            <div class="product-title">
                                <h3><a href="#">Ban BMW</a></h3>
                            </div>
                            <div class="product-price"><ins>Rp. 10Jt</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">6 customer reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium//82/MTA-2445102/ssr_velg-mobil-rep--ssr-type-c-ring-15_full02.jpg">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="https://cdn.ceat.com/images/tyre/model/zoom/Milaze(Suv)3.png">
                            </a>
                            <span class="product-sale">SALE</span>
                            <span class="product-sale-off">50% Off</span>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>

                        <div class="product-description">
                            <div class="product-category">Velg Mobil</div>
                            <div class="product-title">
                                <h3><a href="#">Velg Marchedes</a></h3>
                            </div>
                            <div class="product-price">
                                <del>Rp. 5Jt</del><ins>Rp. 2,5Jt</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">5 customer reviews</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://cdn.ceat.com/images/tyre/model/zoom/Milaze(Suv)3.png">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium//82/MTA-2445102/ssr_velg-mobil-rep--ssr-type-c-ring-15_full02.jpg">
                            </a>
                            <span class="product-new">NEW</span>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>

                        <div class="product-description">
                            <div class="product-category">Velg Mobil</div>
                            <div class="product-title">
                                <h3><a href="#">Ban BMW</a></h3>
                            </div>
                            <div class="product-price"><ins>Rp. 10Jt</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">6 customer reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium//82/MTA-2445102/ssr_velg-mobil-rep--ssr-type-c-ring-15_full02.jpg">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="https://cdn.ceat.com/images/tyre/model/zoom/Milaze(Suv)3.png">
                            </a>
                            <span class="product-sale">SALE</span>
                            <span class="product-sale-off">50% Off</span>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>

                        <div class="product-description">
                            <div class="product-category">Velg Mobil</div>
                            <div class="product-title">
                                <h3><a href="#">Velg Marchedes</a></h3>
                            </div>
                            <div class="product-price">
                                <del>Rp. 5Jt</del><ins>Rp. 2,5Jt</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">5 customer reviews</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://cdn.ceat.com/images/tyre/model/zoom/Milaze(Suv)3.png">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium//82/MTA-2445102/ssr_velg-mobil-rep--ssr-type-c-ring-15_full02.jpg">
                            </a>
                            <span class="product-new">NEW</span>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>

                        <div class="product-description">
                            <div class="product-category">Velg Mobil</div>
                            <div class="product-title">
                                <h3><a href="#">Ban BMW</a></h3>
                            </div>
                            <div class="product-price"><ins>Rp. 10Jt</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">6 customer reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium//82/MTA-2445102/ssr_velg-mobil-rep--ssr-type-c-ring-15_full02.jpg">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="https://cdn.ceat.com/images/tyre/model/zoom/Milaze(Suv)3.png">
                            </a>
                            <span class="product-sale">SALE</span>
                            <span class="product-sale-off">50% Off</span>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>

                        <div class="product-description">
                            <div class="product-category">Velg Mobil</div>
                            <div class="product-title">
                                <h3><a href="#">Velg Marchedes</a></h3>
                            </div>
                            <div class="product-price">
                                <del>Rp. 5Jt</del><ins>Rp. 2,5Jt</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">5 customer reviews</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://cdn.ceat.com/images/tyre/model/zoom/Milaze(Suv)3.png">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium//82/MTA-2445102/ssr_velg-mobil-rep--ssr-type-c-ring-15_full02.jpg">
                            </a>
                            <span class="product-new">NEW</span>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>

                        <div class="product-description">
                            <div class="product-category">Velg Mobil</div>
                            <div class="product-title">
                                <h3><a href="#">Ban BMW</a></h3>
                            </div>
                            <div class="product-price"><ins>Rp. 10Jt</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">6 customer reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium//82/MTA-2445102/ssr_velg-mobil-rep--ssr-type-c-ring-15_full02.jpg">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="https://cdn.ceat.com/images/tyre/model/zoom/Milaze(Suv)3.png">
                            </a>
                            <span class="product-sale">SALE</span>
                            <span class="product-sale-off">50% Off</span>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>

                        <div class="product-description">
                            <div class="product-category">Velg Mobil</div>
                            <div class="product-title">
                                <h3><a href="#">Velg Marchedes</a></h3>
                            </div>
                            <div class="product-price">
                                <del>Rp. 5Jt</del><ins>Rp. 2,5Jt</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">5 customer reviews</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://cdn.ceat.com/images/tyre/model/zoom/Milaze(Suv)3.png">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium//82/MTA-2445102/ssr_velg-mobil-rep--ssr-type-c-ring-15_full02.jpg">
                            </a>
                            <span class="product-new">NEW</span>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>

                        <div class="product-description">
                            <div class="product-category">Velg Mobil</div>
                            <div class="product-title">
                                <h3><a href="#">Ban BMW</a></h3>
                            </div>
                            <div class="product-price"><ins>Rp. 10Jt</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">6 customer reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium//82/MTA-2445102/ssr_velg-mobil-rep--ssr-type-c-ring-15_full02.jpg">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="https://cdn.ceat.com/images/tyre/model/zoom/Milaze(Suv)3.png">
                            </a>
                            <span class="product-sale">SALE</span>
                            <span class="product-sale-off">50% Off</span>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>

                        <div class="product-description">
                            <div class="product-category">Velg Mobil</div>
                            <div class="product-title">
                                <h3><a href="#">Velg Marchedes</a></h3>
                            </div>
                            <div class="product-price">
                                <del>Rp. 5Jt</del><ins>Rp. 2,5Jt</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">5 customer reviews</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://cdn.ceat.com/images/tyre/model/zoom/Milaze(Suv)3.png">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium//82/MTA-2445102/ssr_velg-mobil-rep--ssr-type-c-ring-15_full02.jpg">
                            </a>
                            <span class="product-new">NEW</span>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>

                        <div class="product-description">
                            <div class="product-category">Velg Mobil</div>
                            <div class="product-title">
                                <h3><a href="#">Ban BMW</a></h3>
                            </div>
                            <div class="product-price"><ins>Rp. 10Jt</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">6 customer reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium//82/MTA-2445102/ssr_velg-mobil-rep--ssr-type-c-ring-15_full02.jpg">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="https://cdn.ceat.com/images/tyre/model/zoom/Milaze(Suv)3.png">
                            </a>
                            <span class="product-sale">SALE</span>
                            <span class="product-sale-off">50% Off</span>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>

                        <div class="product-description">
                            <div class="product-category">Velg Mobil</div>
                            <div class="product-title">
                                <h3><a href="#">Velg Marchedes</a></h3>
                            </div>
                            <div class="product-price">
                                <del>Rp. 5Jt</del><ins>Rp. 2,5Jt</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">5 customer reviews</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Shop products -->

<!-- DELIVERY INFO -->
<section class="background-grey p-t-40 p-b-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="icon-box effect small clean">
                    <div class="icon">
                        <a href="#"><i class="fa fa-gift"></i></a>
                    </div>
                    <h3>Pengiriman gratis</h3>
                    <p>Pengiriman gratis setelah mencapai transaksi 2jt</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="icon-box effect small clean">
                    <div class="icon">
                        <a href="#"><i class="fa fa-plane"></i></a>
                    </div>
                    <h3>Worldwide delivery</h3>
                    <p>Kita juga dapat mengirim barang ke seluruh dunia.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="icon-box effect small clean">
                    <div class="icon">
                        <a href="#"><i class="fa fa-history"></i></a>
                    </div>
                    <h3>60 hari jaminan uang kembali.</h3>
                    <p>Tidak merasa puas dengan produk kami? Kami akan kembalikan 100% uang kamu.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: DELIVERY INFO -->

<!-- SHOP WIDGET PRODUTCS -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="heading-text heading-line">
                    <h4>User Rated</h4>
                </div>

                <div class="widget-shop">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium//82/MTA-2445102/ssr_velg-mobil-rep--ssr-type-c-ring-15_full02.jpg">
                            </a>
                        </div>
                        <div class="product-description">
                            <div class="product-category">Velg Mobil</div>
                            <div class="product-title">
                                <h3><a href="#">Velg Mobil</a></h3>
                            </div>
                            <div class="product-price"><del>Rp. 20Jt</del><ins>Rp. 10Jt</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium//82/MTA-2445102/ssr_velg-mobil-rep--ssr-type-c-ring-15_full02.jpg">
                            </a>
                        </div>

                        <div class="product-description">
                            <div class="product-category">Velg Mobil</div>
                            <div class="product-title">
                                <h3><a href="#">Velg Mobil</a></h3>
                            </div>
                            <div class="product-price"><ins>Rp. 29Jt</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>

                    </div>
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium//82/MTA-2445102/ssr_velg-mobil-rep--ssr-type-c-ring-15_full02.jpg">
                            </a>
                        </div>

                        <div class="product-description">
                            <div class="product-category">Ban Mobil</div>
                            <div class="product-title">
                                <h3><a href="#">Ban Mobil BMW</a></h3>
                            </div>
                            <div class="product-price"><ins>Rp. 29Jt</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="heading-text heading-line">
                    <h4>Best Seller</h4>
                </div>

                <div class="widget-shop">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium//82/MTA-2445102/ssr_velg-mobil-rep--ssr-type-c-ring-15_full02.jpg">
                            </a>
                        </div>

                        <div class="product-description">
                            <div class="product-category">Ban Mobil</div>
                            <div class="product-title">
                                <h3><a href="#">Ban Mobil BMW</a></h3>
                            </div>
                            <div class="product-price"><ins>Rp. 29Jt</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium//82/MTA-2445102/ssr_velg-mobil-rep--ssr-type-c-ring-15_full02.jpg">
                            </a>
                        </div>

                        <div class="product-description">
                            <div class="product-category">Velg Mobil</div>
                            <div class="product-title">
                                <h3><a href="#">Velg Mobil</a></h3>
                            </div>
                            <div class="product-price"><ins>Rp. 29Jt</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>

                    </div>
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://cdn.ceat.com/images/tyre/model/zoom/Milaze(Suv)3.png">
                            </a>
                        </div>

                        <div class="product-description">
                            <div class="product-category">Ban Mobil</div>
                            <div class="product-title">
                                <h3><a href="#">Ban Mobil BMW</a></h3>
                            </div>
                            <div class="product-price"><ins>Rp. 29Jt</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section id="section3" class="no-padding">
    <div id="portfolio" class="grid-layout portfolio-4-columns" data-margin="0">

        <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="{!!asset('homepages/car-service/images/gallery/1.jpg')!!}" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Makmur Jaya Ban - Servis Mobil" data-lightbox="image"
                        href="{!!asset('homepages/car-service/images/gallery/1.jpg')!!}"
                        class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>


        <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="https://everydayusedcars.com/wp-content/uploads/2017/01/BMW-Car-Services.jpg"
                            alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Makmur Jaya Ban - Servis Mobil" data-lightbox="image"
                        href="https://everydayusedcars.com/wp-content/uploads/2017/01/BMW-Car-Services.jpg"
                        class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>


        <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="https://www.thecarmech.com/wp-content/uploads/2020/06/new-image.jpg"
                            alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Makmur Jaya Ban - Servis Mobil" data-lightbox="image"
                        href="https://www.thecarmech.com/wp-content/uploads/2020/06/new-image.jpg"
                        class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>


        <div class="portfolio-item img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="https://www.verold.com/wp-content/uploads/2018/10/car-servicing-1.jpg"
                            alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Makmur Jaya Ban - Servis Mobil" data-lightbox="image"
                        href="https://www.verold.com/wp-content/uploads/2018/10/car-servicing-1.jpg"
                        class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>


        <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="https://www.chigwellmotorworks.co.uk/images/car-service-in-dublin.jpg"
                            alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Makmur Jaya Ban - Servis Mobil" data-lightbox="image"
                        href="https://www.chigwellmotorworks.co.uk/images/car-service-in-dublin.jpg"
                        class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>


        <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media ct-marketing ct-webdesign">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img
                            src="https://www.checkinjakarta.id/assets_web/images/article/ffc943fc9fdeeb9368b3d321bf5dec8b.jpg"
                            alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Makmur Jaya Ban - Servis Mobil" data-lightbox="image"
                        href="https://www.checkinjakarta.id/assets_web/images/article/ffc943fc9fdeeb9368b3d321bf5dec8b.jpg"
                        class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>


        <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img
                            src="https://www.bobsmechanicalrepairs.co.uk/storage/temp/public/resized/lossy-auto-90-1200/car-servicing.jpg"
                            alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Makmur Jaya Ban - Servis Mobil" data-lightbox="image"
                        href="https://www.bobsmechanicalrepairs.co.uk/storage/temp/public/resized/lossy-auto-90-1200/car-servicing.jpg"
                        class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>


        <div class="portfolio-item img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="https://topmotoric.com/wp-content/uploads/2019/07/maxresdefault.jpg"
                            alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Makmur Jaya Ban - Servis Mobil" data-lightbox="image"
                        href="https://topmotoric.com/wp-content/uploads/2019/07/maxresdefault.jpg"
                        class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>

    </div>
</section>
<section>
    <div class="container">
        <div class="line"></div>
        <h4>Brand Terbaik Untuk Mobil Anda</h4>
        <div class="row client-logos carousel-description-clients carousel-description-style ">
            <div class="col-lg-4">
                <div class="description">
                    <h2>Brand</h2> Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium dignissimos
                    nulla cum neque tempora at repudiandae eveniet impedit natus itaque dolore quos deserunt quaerat
                    ratione sed molestias consequatur, voluptate debitis?
                </div>
            </div>
            <div class="col-lg-8">
                <div class="carousel dots-grey" data-items="3" data-arrows="false">
                    <div>
                        <a href="#"><img alt="" src="images/clients/1.png"></a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="images/clients/2.png"></a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="images/clients/3.png"></a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="images/clients/4.png"></a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="images/clients/5.png"></a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="images/clients/6.png"></a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="images/clients/7.png"></a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="images/clients/8.png"></a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="images/clients/9.png"></a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="images/clients/10.png"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="space"></div>
    </div>
    </div>
</section>
@endsection
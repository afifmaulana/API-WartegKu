<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/multikart/front-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Sep 2020 22:05:27 GMT -->
@include('templates.partials.landingpage._head')

<body>

<!-- header start -->
@include('templates.partials.landingpage._header')
<!-- header end -->


<!-- Home slider -->
@include('templates.partials.landingpage._slide')
<!-- Home slider end -->


<!-- Paragraph-->
@yield('content')
<!-- Paragraph end -->



 <!-- blog section -->
 <div class="container">
    <div class="row">
        <div class="col">
            <div class="title1 section-t-space">
                <h4>Jadilah Mitra Kami</h4>
                <h5>Menjangkau para pembeli secara luas hanya dengan gadget. Buat pemesanan makanan
                    di warung Anda secara Online bersama Kami.
                </h5>
                <h2 class="title-inner1">WartegKu</h2>
            </div>
        </div>
    </div>
</div>
<section class="blog p-t-0 ratio2_3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slide-3 no-arrow">
                    <div class="col-md-12">
                        <a href="#">
                            <div class="classic-effect">
                                <div>
                                    <img src="{{ asset ('assets-landingpage/images/blog/wartegsedap.jpg')}}" height="250" width="250" class="mx-auto d-block"
                                        alt="">
                                </div>
                                <span></span>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>25 Januari 2019</h4>
                            <a href="#">
                                <p>Warteg Sedap</p>
                            </a>
                            <hr class="style1">
                            <h6>Owner: H.Kadir</h6>
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="#">
                            <div class="classic-effect">
                                <div>
                                    <img src="{{ asset ('assets-landingpage/images/blog/bos.jpg')}}" height="250" width="250" class="mx-auto d-block"
                                        alt="">
                                </div>
                                <span></span>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>12 Februari 2019</h4>
                            <a href="#">
                                <p>Warteg Boss</p>
                            </a>
                            <hr class="style1">
                            <h6>Owner: Pak Sofyan</h6>
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="#">
                            <div class="classic-effect">
                                <div>
                                    <img src="{{ asset ('assets-landingpage/images/blog/explore.png')}}" height="250" width="250" class="mx-auto d-block"
                                        alt="">
                                </div>
                                <span></span>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>04 Maret 2019</h4>
                            <a href="#">
                                <p>Warteg Explore</p>
                            </a>
                            <hr class="style1">
                            <h6>Owner: Bang Alex</h6>
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="#">
                            <div class="classic-effect">
                                <div>
                                    <img src="{{ asset ('assets-landingpage/images/blog/brengos.jpg')}}" height="250" width="250" class="mx-auto d-block"
                                        alt="">
                                </div>
                                <span></span>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>21 Januari 2020</h4>
                            <a href="#">
                                <p>Warteng Brengos</p>
                            </a>
                            <hr class="style1">
                            <h6>Owner: Bu Evi</h6>
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="#">
                            <div class="classic-effect">
                                <div>
                                    <img src="{{ asset ('assets-landingpage/images/blog/barokah.jpg')}}" height="250" width="250" class="mx-auto d-block"
                                        alt="">
                                </div>
                                <span></span>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>30 Januari 2020</h4>
                            <a href="#">
                                <p>Warteg Barokah</p>
                            </a>
                            <hr class="style1">
                            <h6>Owner: Ibu Siti Barokah</h6>
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="#">
                            <div class="classic-effect">
                                <div>
                                    <img src="{{ asset ('assets-landingpage/images/blog/mariam.jpg')}}" height="250" width="250" class="mx-auto d-block"
                                        alt="">
                                </div>
                                <span></span>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>25 Mei 2020</h4>
                            <a href="#">
                                <p>Warteg Mariam</p>
                            </a>
                            <hr class="style1">
                            <h6>Owner: Hj.Rodi</h6>
                            <hr>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <hr>
</section>
<!-- blog section end -->

<!-- Parallax banner -->
<section class="p-0">
    <div class="full-banner parallax text-center p-left">
        <img src="{{ asset ('assets-landingpage/images/home-banner/slide2.jpg') }}" alt="" class="bg-img blur-up lazyload">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="banner-contain">
                        <h2>2020</h2>
                        <h3>WartegKu</h3>
                        <h4>Ayo Jalin Hubungan Denganku</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Parallax banner end -->


<!-- footer -->
@include('.templates.partials.landingpage._footer')
<!-- footer end -->


@include('templates.partials.landingpage._script')

</body>


<!-- Mirrored from themes.pixelstrap.com/multikart/front-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Sep 2020 22:08:16 GMT -->
</html>

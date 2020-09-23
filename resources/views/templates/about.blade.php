<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/multikart/front-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Sep 2020 22:05:27 GMT -->
@include('templates.partials.landingpage._head')

<body>

<!-- header start -->
@include('templates.partials.landingpage._header')
<!-- header end -->





<!-- Paragraph-->
@yield('content')
<!-- Paragraph end -->



 <!-- breadcrumb start -->
 <div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Tentang</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tentang</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->


<!-- about section start -->
<section class="about-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-section"><img src="{{asset('assets-landingpage/images/tentang.png')}}"
                        class="img-fluid blur-up lazyload" alt=""></div>
            </div>
            <div class="col-sm-12">
                <h4>WartegKu
                </h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                </p>
                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and
                    demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot
                    foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail
                    in their duty through weakness of will, which is the same as saying through shrinking from toil
                    and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our
                    power of choice is untrammelled and when nothing prevents our being able to do what we like
                    best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and
                    owing to the claims of duty or the obligations of business it will frequently occur that
                    pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in
                    these matters to this principle of selection: he rejects pleasures to secure other greater
                    pleasures, or else he endures pains to avoid worse pains.</p>
            </div>
        </div>
    </div>
</section>
<!-- about section end -->


<!--Testimonial start-->
<section class="testimonial small-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="slide-2 testimonial-slider no-arrow">
                    <div>
                        <div class="media">
                            <div class="text-center">
                                <img src="{{asset ('assets-landingpage/images/elfan.JPG')}}">
                                <h5>Helfanza Nanda Alfara</h5>
                                <h6>Fullstack Developer</h6>
                            </div>
                            <div class="media-body">
                                <p>you how all this mistaken idea of denouncing pleasure and praising pain was born
                                    and I will give you a complete account of the system, and expound the actual
                                    teachings.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="media">
                            <div class="text-center">
                                <img src="{{asset ('assets-landingpage/images/afif.JPG')}}" alt="#">
                                <h5>Afif Maulana Iskandar</h5>
                                <h6>Mencari Jati diri</h6>
                            </div>
                            <div class="media-body">
                                <p>you how all this mistaken idea of denouncing pleasure and praising pain was born
                                    and I will give you a complete account of the system, and expound the actual
                                    teachings.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial ends-->

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

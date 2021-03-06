<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/multikart/front-end/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Sep 2020 22:41:15 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{ asset ('assets-landingpage/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset ('assets-landingpage/images/favicon.png') }}" type="image/x-icon">
    <title>Login WartegKu</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets-landingpage/css/fontawesome.css') }}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets-landingpage/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets-landingpage/css/slick-theme.css') }}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets-landingpage/css/animate.css') }}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets-landingpage/css/themify-icons.css') }}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets-landingpage/css/bootstrap.css') }}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets-landingpage/css/color1.css') }}" media="screen"
          id="color">


</head>

<body>


<!-- header start -->
<header>
    <div class="mobile-fix-option"></div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu">
                    <div class="menu-left">
                        <div class="brand-logo">
                        <a href="/"><img src="{{asset ('assets-landingpage/images/wartegku.png') }}" alt=""
                                 width="170" height="100" class="img-fluid blur-up lazyload"></a>
                        </div>
                    </div>
                    <div class="menu-right pull-right">
                        <div>
                            <nav id="main-nav">
                                <div class="toggle-nav"><i class="fas fa-bars sidebar-bar"></i></div>
                                <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                    <li>
                                        <div class="mobile-back text-right">Back<i class="fas fa-angle-right"
                                                aria-hidden="true"></i></div>
                                    </li>
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href="{{route('about.index')}}">Tentang</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Bantuan</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->


<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Mitra login</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                        <li class="breadcrumb-item active">Masuk</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!--section start-->
<section class="login-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>Masuk</h3>
                <div class="theme-card">
                    <form class="theme-form" method="POST" action="{{route('store.login.submit')}}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                                   placeholder="Email" name="email" required="" value="{{ old('email') }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="review">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                   id="review"
                                   placeholder="Enter your password" required="" name="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-solid">Masuk</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 right-login">
                <h3>Mitra WartegKu</h3>
                <div class="theme-card authentication-right">
                    <h6 class="title-font">Daftar Mitra</h6>
                    <p>Daftarkan segera Warung Anda untuk menjangkau para pembeli secara luas
                        dan mudah hanya melalui gadget. </p>
                    <a href="{{route('store.register')}}" class="btn btn-solid">Daftar</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->


<!-- footer start -->
<footer class="footer-light">
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="footer-end">
                        <p><i class="fas fa-copyright" aria-hidden="true"></i> 2020 WartegKu | Ayo Jalin Hubungan Denganku</p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="payment-card-bottom">
                        <ul>
                            <li>
                                <a href="#"><img src="{{ asset ('assets-landingpage/images/icon/visa.png') }}"
                                                 alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset ('assets-landingpage/images/icon/mastercard.png') }}"
                                                 alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset ('assets-landingpage/images/icon/paypal.png') }}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img
                                            src="{{ asset ('assets-landingpage/images/icon/american-express.html') }}"
                                            alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset ('assets-landingpage/images/icon/discover.png') }}"
                                                 alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->


<!-- latest jquery-->
<script src="{{ asset ('assets-landingpage/js/jquery-3.3.1.min.js') }}"></script>

<!-- fly cart ui jquery-->
<script src="{{ asset ('assets-landingpage/js/jquery-ui.min.js') }}"></script>

<!-- exitintent jquery-->
<script src="{{ asset ('assets-landingpage/js/jquery.exitintent.js') }}"></script>
<script src="{{ asset ('assets-landingpage/js/exit.js') }}"></script>

<!-- popper js-->
<script src="{{ asset ('assets-landingpage/js/popper.min.js') }}"></script>

<!-- slick js-->
<script src="{{ asset ('assets-landingpage/js/slick.js') }}"></script>

<!-- menu js-->
<script src="{{ asset ('assets-landingpage/js/menu.js') }}"></script>

<!-- lazyload js-->
<script src="{{ asset ('assets-landingpage/js/lazysizes.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset ('assets-landingpage/js/bootstrap.js') }}"></script>

<!-- Bootstrap Notification js-->
<script src="{{ asset ('assets-landingpage/js/bootstrap-notify.min.js') }}"></script>

<!-- Fly cart js-->
<script src="{{ asset ('assets-landingpage/js/fly-cart.js') }}"></script>

<!-- Theme js-->
<script src="{{ asset ('assets-landingpage/js/script.js') }}"></script>

<script>
    $(window).on('load', function () {
        setTimeout(function () {
            $('#exampleModal').modal('show');
        }, 2500);
    });

    function openSearch() {
        document.getElementById("search-overlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("search-overlay").style.display = "none";
    }
</script>

</body>


<!-- Mirrored from themes.pixelstrap.com/multikart/front-end/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Sep 2020 22:41:15 GMT -->
</html>

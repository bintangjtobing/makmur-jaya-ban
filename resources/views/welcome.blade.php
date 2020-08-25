<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Bintang Tobing" />
    <meta name="description" content="@yield('deschomepage')">
    <meta name="keywords"
        content="upvc murah medan, upvc terbaik di medan, upvc kualitas terbaik, Jaya Ban, euroupvc, upvc termurah, upvc terkuat, upvc medan, upvc jakarta, upvc pekanbaru, upvc berkualitas, upvc desain custom">
    <link rel="shortcut icon" href="{!!asset('images/favicon.png')!!}" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('titlepage')</title>

    <link href="{!!asset('css/plugins.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/style.css')!!}" rel="stylesheet">
    <link rel="stylesheet" href="{!!asset('css/custom.css')!!}">
    <link rel="stylesheet" href="{!!asset('css/media-query.css')!!}">
    <script src="https://kit.fontawesome.com/bf3b9c3659.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "Makmur Jaya Ban",
            "url": "https://jayaban.com/about-us",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://jayaban.com/{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>

    {{-- METAGRAPH FACEBOOK --}}
    <meta property="fb:admins" content="593740541289378">
    <meta property="og:site_name" content="@yield('title')" />
    <meta property="og:url" content="{{Request::url()}}" />
    <meta property="og:type" content="@yield('ogtype')" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('deschomepage')" />
    <meta property="og:image"
        content="{!!url('https://res.cloudinary.com/sarjanamalam/image/upload/v1596438013/fbimg_vsmk7u.jpg')!!}">

    <!--GTAG JS-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-68593210-14"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-68593210-14');
    </script>

</head>

<body>

    <div class="body-inner">
        <div id="topbar" class="d-none d-xl-block d-lg-block topbar-fullwidth">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="top-menu">
                            <li><a href="tel:0618200431">Hotline: (061) 8200 431</a>
                            </li>
                            <li><a href="https://api.whatsapp.com/send?phone=#" target="_blank"><span><i
                                            class="far fa-comments"></i>
                                        Live
                                        Chat</span></a></li>
                            <li><a href="mailto:#" target="_blank"><span><i class="far fa-envelope"></i>
                                        info@jayaban.com</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 d-none d-sm-block">
                        <div class="social-icons social-icons-colored-hover">
                            <ul>
                                <li class="social-facebook"><a href="https://facebook.com/euroupvcmedan"
                                        target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-instagram"><a href="https://instagram.com/euroupvc" target="_blank"><i
                                            class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header id="header" data-fullwidth="true">
            <div class="header-inner">
                <div class="container">

                    <div id="logo">
                        <a href="/">
                            <span class="logo-default">
                                <img class="img-fluid" src="{!!asset('homepages/main/images/logo.png')!!}">
                            </span>
                            <span class="logo-dark">
                                <img class="img-fluid" src="{!!asset('homepages/main/images/logo.png')!!}">
                            </span>
                        </a>
                    </div>
                    <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li class="dropdown"><a href="#"
                                            style="background-color:rgba(0,0,0,0.06) !important; color: #dd4472;"><span><i
                                                    class="fas fa-bars"></i>
                                                Browse
                                                Categories</span> </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Ban Mobil</a></li>
                                            <li><a href="#">Velg Mobil</a></li>
                                            <li><a href="#">Sparepart</a></li>
                                            <li><a href="#">Shockbreaker</a></li>
                                            <li class="dropdown-submenu"><a href="#">Aksesoris Mobil</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Dash-cam</a></li>
                                                    <li><a href="#">Sarung Jok</a></li>
                                                    <li><a href="#">Sticker Mobil</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Oli Mobil</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Oli Mesin</a></li>
                                                    <li><a href="#">Rem</a></li>
                                                    <li><a href="#">Garda</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Aki Mobil</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Store</a></li>
                                    <li><a href="#">Workshop</a></li>
                                    <li><a href="#">Blog & Tips</a></li>
                                    <li><a href="#">About Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->

                </div>
            </div>
        </header>
        {{-- Content Yield --}}
        @yield('content')
        <section class="p-t-50 p-b-50"
            style="background-image:url(homepages/branding/images/background-4.png); background-position:71% 22%;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-text heading-section">
                                    <h2>Hubungi Kami</h2>
                                </div>
                            </div>
                            <div class="col-lg-6 m-b-30">
                                <address>
                                    <strong>Showroom:</strong><br>
                                    Jl Setia Budi No. 185 <br>
                                    Tg. Rejo. Medan<br>
                                    Medan - Sumatera Utara 20114 <br>
                                </address>
                                <strong>Phone:</strong> <a href="https://api.whatsapp.com/send?phone=#">(+62)
                                    81262845980</a>
                                <br>
                                <strong>Email:</strong> <a href="mailto:info@jayaban.com">info@jayaban.com</a>
                            </div>
                            <div class="col-lg-12 m-b-30">
                                <h4>Our Social Network</h4>
                                <div class="social-icons social-icons-light social-icons-colored-hover">
                                    <ul>
                                        <li class="social-facebook"><a href="https://facebook.com/" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="social-instagram"><a href="https://instagram.com/" target="_blank"><i
                                                    class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-1">
                        <form class="" action="/kirim-pesan" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" aria-required="true" required name="name"
                                        class="form-control required name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" aria-required="true" required name="email"
                                        class="form-control required email" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="nohp">No HP</label>
                                    <input type="tel" aria-required="true" required name="nohp"
                                        class="form-control required" placeholder="Enter your phone number">
                                    <small class="text-muted">Masukkan dengan format +62812345****</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" required name="message" rows="8" class="form-control required"
                                    placeholder="Enter your Message"></textarea>
                            </div>
                            <input type="hidden" name="type" value="Pesan">
                            <div class="form-group">
                                <button class="btn btn-light" type="submit" id="form-submit"><i
                                        class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer">
            <div class="copyright-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <?php $y = Date('Y') ?>
                            <div class="copyright-text">&copy;{{$y}} - <a href="/">CV. Jaya Ban</a>. All Rights
                                Reserved. <br>Made by
                                &#9829; from <a href="https://bintangtobing.com" target="_blank">Bintang
                                    Tobing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <a id="scrollTop" class="scroll-to" href="body"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

    <script src="{!!asset('js/jquery.js')!!}"></script>
    <script src="{!!asset('js/plugins.js')!!}"></script>

    <script src="{!!asset('js/functions.js')!!}"></script>
    <script type='text/javascript' src='//maps.googleapis.com/maps/api/js?key=AIzaSyALboiQYa5WEjbINupUsZ1r0C1u7llRyS8'>
    </script>
    <script type="text/javascript" src="{!!asset('plugins/gmap3/gmap3.min.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('plugins/gmap3/map-styles.js')!!}"></script>
</body>

</html>
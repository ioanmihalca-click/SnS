<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $meta_title ?? "Snow 'n' Stuff Blog" }}</title>
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="description" content="{{ $meta_description ?? "Snow 'n' Stuff blog - Music Management, Label and Music Production insights" }}">
    <meta name="keywords" content="{{ $meta_keywords ?? 'blog, snow n stuff, tech house, deep house, house music, techno, electronic music, music label, music production, artist development' }}">

    <!-- Open Graph Tags for Social Media Sharing -->
    <meta property="og:title" content="{{ $meta_title ?? "Snow 'n' Stuff Blog" }}" />
    <meta property="og:description" content="{{ $meta_description ?? "Snow 'n' Stuff blog - Music Management, Label and Music Production insights" }}" />
    <meta property="og:image" content="{{ $og_image ?? 'https://snow-n-stuff.com/assets/img/OG-SnownStuff.jpg' }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:locale" content="en_EU" />
    <meta property="og:site_name" content="Snow 'n' Stuff Blog" />

    <!-- Favicons -->
    <link href="/assets/img/favicon.ico" rel="icon">
    <link href="/assets/img/apple-touch-icon.ico" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    @livewireStyles

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1PQQSTPYZC"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-1PQQSTPYZC');
    </script>
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><span>info@1namm.com</span></i>
                <i class="d-flex align-items-center ms-4"><span> glenn@1namm.com</span></i>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
            <h1 class="logo me-auto me-lg-0"><a href="/">Snow n Stuff</a></h1>
            <nav id="navbar" class="order-last navbar order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="/#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="/#about">About</a></li>
                    <li><a class="nav-link scrollto" href="/#artists">Artists</a></li>
                    <li><a class="nav-link scrollto" href="/#releases">Releases</a></li>
                    <li><a class="nav-link scrollto" href="/#playlists">Playlists</a></li>
                    <li><a class="nav-link" href="/blog">Blog</a></li>
                    <li><a class="nav-link scrollto" href="/#gallery">Gallery</a></li>
                    <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header><!-- End Header -->

    <main id="main">
        <section id="blog-content" class="blog-content">
            <div class="container mt-20" data-aos="fade-up">
                {{ $slot }}
            </div>
        </section>
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Snow n Stuff</strong>. All Rights Reserved
            </div>
            <div class="credits">
                Web application by <a href="https://clickstudios-digital.com">Click Studios Digital</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>

    @livewireScripts
</body>
</html>
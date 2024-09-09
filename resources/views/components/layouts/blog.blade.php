<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('meta_title', 'SnownStuff - Music Management, Label and Music Production')</title>

    <meta name="description" content="@yield('meta_description', 'SnowNStuff - Music Management, Label and Music Production')">
    <meta name="keywords" content="@yield('meta_keywords', 'blog, music articles, news')">


  <link rel="canonical" href="{{ url()->current() }}" />

  <!-- OpenGraph Meta Tags -->
    <meta property="og:title" content="@yield('meta_title', 'SnowNStuff - Music Management, Label and Music Production')">
    <meta property="og:description" content="@yield('meta_description', 'SnowNStuff is an innovative music label specializing in Tech House, Deep House, House, and Techno. Discover exceptional artists and immersive live events curated by industry veterans.')">
    <meta property="og:image" content="@yield('og_image')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="article">


  <!-- Favicons -->
  <link href="/assets/img/favicon.ico" rel="icon">
  <link href="/assets/img/apple-touch-icon.ico" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Snow 'n' Stuff",
      "alternateName": "Snow N Stuff",
      "url": "https://www.snow-n-stuff.com",
      "logo": "https://www.snow-n-stuff.com/assets/img/Snownstuff%20Logo.png",
      "sameAs": [
        "https://www.facebook.com/SnowNStuff",
        "https://www.instagram.com/snow_n_stuff",
        "https://x.com/G_n_S_"
      ],
      "description": "Snow 'n' Stuff is an innovative music label specializing in Tech House, Deep House, House, and Techno. Discover exceptional artists and immersive live events curated by industry veterans.",
      "foundingDate": "2020",
      "founders": [
        {
          "@type": "Person",
          "name": "Glenn Forrestgate"
        },
        {
          "@type": "Person",
          "name": "Style da Kid"
        }
      ],
      "genre": [
        "Tech House",
        "Deep House",
        "House",
        "Techno"
      ]
    }
    </script>

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1PQQSTPYZC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1PQQSTPYZC');
</script>

 @livewireStyles
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
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="/#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="/#about">About</a></li>
                    <li><a class="nav-link scrollto" href="/#artists">Artists</a></li>
                    <li><a class="nav-link scrollto" href="/#releases">Releases</a></li> 
                    <li><a class="nav-link scrollto" href="/#playlists">Playlists</a></li> 
                    <li><a class="nav-link scrollto" href="/#gallery">Gallery</a></li> 
                    <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
                    <li><a class="nav-link" href="/blog">Blog</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <main id="main">
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Blog</h2>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>Blog</li>
                    </ol>
                </div>
            </div>
        </section>

        <section class="inner-page">
            <div class="container">
                {{ $slot }}
            </div>
        </section>
    </main>
      
      <!-- ======= Footer ======= -->
  <footer id="footer">
    

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Snow n Stuff</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
 
        Website by <a href="https://clickstudios-digital.com">Click Studios Digital</a> @ <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

   @livewireScripts
</body>

</html>
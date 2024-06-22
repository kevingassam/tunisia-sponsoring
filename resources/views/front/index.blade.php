<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Tunisia Sponsoring TN - Sponsorisation des Pages en Tunisie</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/icons/icon.png">
    <link rel="manifest" href="/front/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="/icons/icon.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="/front/assets/css/theme.css" rel="stylesheet" />




    <!-- Meta Description -->
    <meta name="description"
        content="TUnisia Sponsoring TN permet la sponsorisation de vos pages et contenus sur diverses plateformes sans carte en Tunisie. Nous gérons les paiements pour vous.">

    <!-- Keywords -->
    <meta name="keywords"
        content="TUnisia Sponsoring TN, sponsorisation, Tunisie, paiement sans carte, Facebook, Instagram, Google Ads, publicité en ligne, marketing digital">

    <!-- Open Graph Meta Tags for Social Media Sharing -->
    <meta property="og:title" content="TUnisia Sponsoring TN - Sponsorisation des Pages en Tunisie">
    <meta property="og:description"
        content="TUnisia Sponsoring TN permet la sponsorisation de vos pages et contenus sur diverses plateformes sans carte en Tunisie. Nous gérons les paiements pour vous.">
    <meta property="og:image" content="/icons/icon.png">
    <meta property="og:url" content="tTunisia-sponsoring.site">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="/icons/logo-white.png">
    <meta name="twitter:title" content="TUnisia Sponsoring TN - Sponsorisation des Pages en Tunisie">
    <meta name="twitter:description"
        content="TUnisia Sponsoring TN permet la sponsorisation de vos pages et contenus sur diverses plateformes sans carte en Tunisie. Nous gérons les paiements pour vous.">
    <meta name="twitter:image" content="/icons/logo-white.png">

    <!-- Author -->
    <meta name="author" content="TUnisia Sponsoring TN">

    <!-- Robots Meta Tag -->
    <meta name="robots" content="index, follow">

    <!-- Link to CSS and other resources -->
    <link rel="stylesheet" href="styles.css">

    <!-- Favicon -->
    <link rel="icon" href="/icons/icon.png" type="image/x-icon">

    <!-- Canonical Link -->
    <link rel="canonical" href="Tunisia-sponsoring.site">
    
    @if (app()->getLocale() == "ar")
        <style>
          .arabe{
            direction: rtl !important;
          }
        </style>
    @endif

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block"
            data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home', ['locale' => app()->getLocale()]) }}">
                    <img src="/icons/logo-black.png" height="34" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
                    </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
                        <li class="nav-item px-3 px-xl-4">
                            <a class="nav-link fw-medium" aria-current="page" href="#service">Services</a>
                        </li>
                        <li class="nav-item px-3 px-xl-4">
                            <a class="nav-link fw-medium" aria-current="page" href="#destination">Le top</a>
                        </li>
                        <li class="nav-item px-3 px-xl-4">
                            <a class="nav-link fw-medium" aria-current="page" href="#booking">Comment ?</a>
                        </li>
                        <li class="nav-item px-3 px-xl-4">
                            <a class="nav-link fw-medium" aria-current="page" href="#testimonial">Témoignages</a>
                        </li>
                        <li class="nav-item px-3 px-xl-4 arabe">
                            <a class="btn btn-outline-dark order-1 order-lg-0 fw-medium" data-bs-toggle="modal"
                                data-bs-target="#popupVideo">
                                {{ __('message.btn_login') }}
                            </a>
                        </li>
                        <li class="nav-item dropdown px-3 px-lg-0">
                            <a class="d-inline-block  text-uppercase ps-0 py-2 pe-3 text-decoration-none dropdown-toggle fw-medium"
                                href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ app()->getLocale() }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg"
                                style="border-radius:0.3rem;" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item"
                                        onclick="document.location.href='{{ route('home', ['locale' => 'fr']) }}'">
                                        FR
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        onclick="document.location.href='{{ route('home', ['locale' => 'ar']) }}'">
                                        AR
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="border-radius: 5px !important;">
                    @livewire('Front.Login')
                </div>
            </div>
        </div>


        <section style="padding-top: 7rem;">
            <div class="bg-holder" style="background-image:url(assets/img/hero/hero-bg.svg);">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end">
                      <img class="pt-7 pt-md-0 hero-img"
                            src="/icons/hero-img.webp" alt="hero-header" /></div>
                    <div class="col-md-7 col-lg-6 text-md-start text-center py-6  arabe ">
                        <h4 class="fw-bold text-danger mb-3 arabe">
                            {{ __('message.welcome_message') }}
                        </h4>
                        <h1 class="hero-title">
                          {{ __('message.big_intro') }}
                        </h1>
                        <p class="mb-4 fw-medium">
                          {{ __('message.intro') }}
                        </p>
                        <div class="text-center text-md-start">
                            <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow"
                                href="#!" role="button">
                                {{ __('message.start_now') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5 pt-md-9" id="service">

            <div class="container">
                <div class="position-absolute z-index--1 end-0 d-none d-lg-block"><img
                        src="/front/assets/img/category/shape.svg" style="max-width: 200px" alt="service" /></div>
                <div class="mb-7 text-center">
                    <h5 class="text-secondary">NOS SERVICES </h5>
                    <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                      Nous offrons les meilleurs services
                    </h3>
                </div>
               


                <div class="row">
                  <div class="col-lg-3 col-sm-6 mb-6">
                      <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                          <div class="card-body p-xxl-5 p-4">
                              <img src="/icons/icons8-promotion.gif" width="40" alt="Service" />
                              <h4 class="mb-3">Sponsorisation</h4>
                              <p class="mb-0 fw-medium">Profitez de nos services de sponsorisation pour maximiser la visibilité de votre marque sur les plateformes de médias sociaux.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mb-6">
                      <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                          <div class="card-body p-xxl-5 p-4">
                              <img src="/icons/icons8-netflix.gif" width="40" alt="Service" />
                              <h4 class="mb-3">Achat de Services</h4>
                              <p class="mb-0 fw-medium">Accédez facilement à une variété de services en ligne pour améliorer vos projets et répondre à vos besoins spécifiques.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mb-6">
                      <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                          <div class="card-body p-xxl-5 p-4">
                              <img src="/icons/icons8-achat.gif" width="40" alt="Service" />
                              <h4 class="mb-3">Achat en Ligne</h4>
                              <p class="mb-0 fw-medium">Effectuez vos achats en ligne de manière simple et sécurisée, et recevez vos produits directement chez vous.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mb-6">
                      <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                          <div class="card-body p-xxl-5 p-4">
                              <img src="/icons/icons8-tic-tac.gif" width="40" alt="Service" />
                              <h4 class="mb-3">Autres Services</h4>
                              <p class="mb-0 fw-medium">Découvrez nos autres services personnalisés pour répondre à toutes vos exigences en matière de sponsoring et plus encore.</p>
                          </div>
                      </div>
                  </div>
              </div>
              
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5" id="destination">

            <div class="container">
                <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4"><img
                        src="/front/assets/img/dest/shape.svg" alt="destination" /></div>
                <div class="mb-7 text-center">
                    <h5 class="text-secondary">Meilleures ventes </h5>
                    <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                      Nos meilleures ventes
                    </h3>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card overflow-hidden shadow"> <img class="card-img-top"
                                src="/front/assets/img/dest/dest1.jpg" alt="Rome, Italty" />
                            <div class="card-body py-4 px-3">
                                <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                    <h4 class="text-secondary fw-medium"><a
                                            class="link-900 text-decoration-none stretched-link" href="#!">Rome,
                                            Italty</a></h4><span class="fs-1 fw-medium">$5,42k</span>
                                </div>
                                <div class="d-flex align-items-center"> <img
                                        src="/front/assets/img/dest/navigation.svg" style="margin-right: 14px"
                                        width="20" alt="navigation" /><span class="fs-0 fw-medium">10 Days
                                        Trip</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card overflow-hidden shadow"> <img class="card-img-top"
                                src="/front/assets/img/dest/dest2.jpg" alt="London, UK" />
                            <div class="card-body py-4 px-3">
                                <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                    <h4 class="text-secondary fw-medium"><a
                                            class="link-900 text-decoration-none stretched-link"
                                            href="#!">London, UK</a></h4><span
                                        class="fs-1 fw-medium">$4.2k</span>
                                </div>
                                <div class="d-flex align-items-center"> <img
                                        src="/front/assets/img/dest/navigation.svg" style="margin-right: 14px"
                                        width="20" alt="navigation" /><span class="fs-0 fw-medium">12 Days
                                        Trip</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card overflow-hidden shadow"> <img class="card-img-top"
                                src="/front/assets/img/dest/dest3.jpg" alt="Full Europe" />
                            <div class="card-body py-4 px-3">
                                <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                    <h4 class="text-secondary fw-medium"><a
                                            class="link-900 text-decoration-none stretched-link" href="#!">Full
                                            Europe</a></h4><span class="fs-1 fw-medium">$15k</span>
                                </div>
                                <div class="d-flex align-items-center"> <img
                                        src="/front/assets/img/dest/navigation.svg" style="margin-right: 14px"
                                        width="20" alt="navigation" /><span class="fs-0 fw-medium">28 Days
                                        Trip</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="booking">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="mb-4 text-start">
                            <h5 class="text-secondary">
                              Facile et rapide
                             </h5>
                            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                              Profitez d'une <b class="text-danger">Carte</b> sans  payer !
                            </h3>
                        </div>
                        <div class="d-flex align-items-start mb-5">
                          <div class="bg-primary me-sm-4 me-3 p-3" style="border-radius: 13px">
                              <img src="/front/assets/img/steps/selection.svg" width="22" alt="steps" />
                          </div>
                          <div class="flex-1">
                              <h5 class="text-secondary fw-bold fs-0">Choisissez un Service</h5>
                              <p>Explorez notre gamme de services et <br class="d-none d-sm-block"> choisissez celui qui correspond le mieux à vos besoins.</p>
                          </div>
                      </div>
                      <div class="d-flex align-items-start mb-5">
                          <div class="bg-danger me-sm-4 me-3 p-3" style="border-radius: 13px">
                              <img src="/front/assets/img/steps/water-sport.svg" width="22" alt="steps" />
                          </div>
                          <div class="flex-1">
                              <h5 class="text-secondary fw-bold fs-0">Effectuez le Paiement</h5>
                              <p>Après avoir sélectionné votre service, <br class="d-none d-sm-block"> procédez au paiement de manière physique.</p>
                          </div>
                      </div>
                      <div class="d-flex align-items-start mb-5">
                          <div class="bg-info me-sm-4 me-3 p-3" style="border-radius: 13px">
                              <img src="/front/assets/img/steps/taxi.svg" width="22" alt="steps" />
                          </div>
                          <div class="flex-1">
                              <h5 class="text-secondary fw-bold fs-0">Profitez de Votre Service</h5>
                              <p>Une fois le paiement effectué, <br class="d-none d-sm-block"> bénéficiez de notre service de sponsoring et voyez les résultats.</p>
                          </div>
                      </div>
                      
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-start">
                        <div class="card position-relative shadow" style="max-width: 370px;">
                            <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right:-160px;top:-210px;">
                                <img src="/front/assets/img/steps/bg.png" style="max-width:550px;" alt="shape" />
                            </div>
                            <div class="card-body p-3"> <img class="mb-4 mt-2 rounded-2 w-100"
                                    src="/front/assets/img/steps/booking-img.jpg" alt="booking" />
                                <div>
                                    <h5 class="fw-medium">Trip To Greece</h5>
                                    <p class="fs--1 mb-3 fw-medium">14-29 June | by Robbin joseph</p>
                                    <div class="icon-group mb-4"> <span class="btn icon-item"> <img
                                                src="/front/assets/img/steps/leaf.svg" alt="" /></span><span
                                            class="btn icon-item"> <img src="/front/assets/img/steps/map.svg"
                                                alt="" /></span><span class="btn icon-item"> <img
                                                src="/front/assets/img/steps/send.svg" alt="" /></span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center mt-n1"><img class="me-3"
                                                src="/front/assets/img/steps/building.svg" width="18"
                                                alt="building" /><span class="fs--1 fw-medium">24 people going</span>
                                        </div>
                                        <div class="show-onhover position-relative">
                                            <div class="card hideEl shadow position-absolute end-0 start-xl-50 bottom-100 translate-xl-middle-x ms-3"
                                                style="width: 260px;border-radius:18px;">
                                                <div class="card-body py-3">
                                                    <div class="d-flex">
                                                        <div style="margin-right: 10px"> <img class="rounded-circle"
                                                                src="/front/assets/img/steps/favorite-placeholder.png"
                                                                width="50" alt="favorite" /></div>
                                                        <div>
                                                            <p class="fs--1 mb-1 fw-medium">Ongoing </p>
                                                            <h5 class="fw-medium mb-3">Trip to rome</h5>
                                                            <h6 class="fs--1 fw-medium mb-2"><span>40%</span> completed
                                                            </h6>
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar" role="progressbar"
                                                                    style="width: 40%;" aria-valuenow="25"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn"> <img src="/front/assets/img/steps/heart.svg"
                                                    width="20" alt="step" /></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="testimonial">

            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="mb-8 text-start">
                            <h5 class="text-secondary">Témoignages </h5>
                            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                              Que disent les gens à notre propos.
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="pe-7 ps-5 ps-lg-0">
                            <div class="carousel slide carousel-fade position-static" id="testimonialIndicator"
                                data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button class="active" type="button" data-bs-target="#testimonialIndicator"
                                        data-bs-slide-to="0" aria-current="true" aria-label="Testimonial 0"></button>
                                    <button class="false" type="button" data-bs-target="#testimonialIndicator"
                                        data-bs-slide-to="1" aria-current="true" aria-label="Testimonial 1"></button>
                                    <button class="false" type="button" data-bs-target="#testimonialIndicator"
                                        data-bs-slide-to="2" aria-current="true" aria-label="Testimonial 2"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item position-relative active">
                                        <div class="card shadow" style="border-radius:10px;">
                                            <div class="position-absolute start-0 top-0 translate-middle"> <img
                                                    class="rounded-circle fit-cover"
                                                    src="/front/assets/img/testimonial/author.png" height="65"
                                                    width="65" alt="" /></div>
                                            <div class="card-body p-4">
                                                <p class="fw-medium mb-4">&quot;On the Windows talking painted pasture
                                                    yet its express parties use. Sure last upon he same as knew next. Of
                                                    believed or diverted no.&quot;</p>
                                                <h5 class="text-secondary">Mike taylor</h5>
                                                <p class="fw-medium fs--1 mb-0">Lahore, Pakistan</p>
                                            </div>
                                        </div>
                                        <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                                            style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                                    </div>
                                    <div class="carousel-item position-relative ">
                                        <div class="card shadow" style="border-radius:10px;">
                                            <div class="position-absolute start-0 top-0 translate-middle"> <img
                                                    class="rounded-circle fit-cover"
                                                    src="/front/assets/img/testimonial/author2.png" height="65"
                                                    width="65" alt="" /></div>
                                            <div class="card-body p-4">
                                                <p class="fw-medium mb-4">&quot;Jadoo is recognized as one of the
                                                    finest travel agency in the world. When it came to planning a trip,
                                                    I found them to be dependable.&quot;</p>
                                                <h5 class="text-secondary">Thomas Wagon</h5>
                                                <p class="fw-medium fs--1 mb-0">CEO of Red Button</p>
                                            </div>
                                        </div>
                                        <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                                            style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                                    </div>
                                    <div class="carousel-item position-relative ">
                                        <div class="card shadow" style="border-radius:10px;">
                                            <div class="position-absolute start-0 top-0 translate-middle"> <img
                                                    class="rounded-circle fit-cover"
                                                    src="/front/assets/img/testimonial/author3.png" height="65"
                                                    width="65" alt="" /></div>
                                            <div class="card-body p-4">
                                                <p class="fw-medium mb-4">&quot;On the Windows talking painted pasture
                                                    yet its express parties use. Sure last upon he same as knew next. Of
                                                    believed or diverted no.&quot;</p>
                                                <h5 class="text-secondary">Kelly Willium</h5>
                                                <p class="fw-medium fs--1 mb-0">Khulna, Bangladesh</p>
                                            </div>
                                        </div>
                                        <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                                            style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                                    </div>
                                </div>
                                <div class="carousel-navigation d-flex flex-column flex-between-center position-absolute end-0 top-lg-50 bottom-0 translate-middle-y z-index-1 me-3 me-lg-0"
                                    style="height:60px;width:20px;">
                                    <button class="carousel-control-prev position-static" type="button"
                                        data-bs-target="#testimonialIndicator" data-bs-slide="prev"><img
                                            src="/front/assets/img/icons/up.svg" width="16"
                                            alt="icon" /></button>
                                    <button class="carousel-control-next position-static" type="button"
                                        data-bs-target="#testimonialIndicator" data-bs-slide="next"><img
                                            src="/front/assets/img/icons/down.svg" width="16"
                                            alt="icon" /></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-6">

            @livewire('Front.Newsletter')

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pb-0 pb-lg-4">

            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-7 col-12 mb-4 mb-md-6 mb-lg-0 order-0">
                        <img class="mb-4" src="/icons/logo-black.png" width="150" alt="Tn Sponsoring" />
                        <p class="fs--1 text-secondary mb-0 fw-medium">
                            L'unique service tunisien qui vous donne la possibilité de faire vous sponsorisation sans
                            carte.
                        </p>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-1 order-md-2">
                        <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Company</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">About</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Careers</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Mobile</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-2 order-md-3">
                        <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Contact</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Help/FAQ</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Press</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Affiliate</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-3 order-md-4">
                        <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">More</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Airlinefees</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Airline</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Low fare tips</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-5 col-12 mb-4 mb-md-6 mb-lg-0 order-lg-4 order-md-1">
                        <h4 class="fw-medium font-sans-serif text-secondary mb-3">
                            Contactez-nous !
                        </h4>
                        <div class="icon-group mb-4">
                            <a class="text-decoration-none icon-item shadow-social" id="facebook" href="#!"><i
                                    class="fab fa-facebook-f"> </i></a><a
                                class="text-decoration-none icon-item shadow-social" id="instagram" href="#!"><i
                                    class="fab fa-instagram"> </i></a><a
                                class="text-decoration-none icon-item shadow-social" id="twitter" href="#!"><i
                                    class="fab fa-twitter"> </i></a>
                        </div>


                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <div class="py-5 text-center">
            <p class="mb-0 text-secondary fs--1 fw-medium">
                All rights reserved.
            </p>
        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="/front/vendors/@popperjs/popper.min.js"></script>
    <script src="/front/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="/front/vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="/front/vendors/fontawesome/all.min.js"></script>
    <script src="/front/assets/js/theme.js"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap"
        rel="stylesheet">
</body>

</html>

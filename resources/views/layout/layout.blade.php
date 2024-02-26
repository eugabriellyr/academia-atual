<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') - Academia Viva Bem</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--==============================
        Google Fonts
      ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700;800&family=Kumbh+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!--==============================
          All CSS File
      ============================== -->

    {{-- CHATGPT --}}
    <!-- Bootstrap JavaScript e dependências jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



    <!-- Bootstrap -->
    <link rel="stylesheet" href={{ asset('assets/css/bootstrap.min.css') }}>
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href={{ asset('assets/css/fontawesome.min.css') }}>
    <!-- Magnific Popup -->
    <link rel="stylesheet" href={{ asset('assets/css/magnific-popup.min.css') }}>
    <!-- Slick Slider -->
    <link rel="stylesheet" href={{ asset('assets/css/slick.min.css') }}>
    <!-- Flip Slider -->
    <link rel="stylesheet" href={{ asset('assets/css/jquery.flipster.min.css') }}>
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href={{ asset('assets/css/style.css') }}>

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"> --}}

    <link rel="stylesheet" href={{ asset('assets/css/estilo-gaby.css') }}>

    {{-- links --}}

</head>

<body>

    <!--==============================
     Preloader
    ==============================-->
    {{-- <div class="preloader "> --}}
    {{-- <div class="preloader-inner">
            <span class="loader"></span>
        </div> --}}
    {{-- </div> --}}

    <div class="popup-search-box">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="Search Here..">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <div class="sidemenu-wrapper">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget footer-widget">
                <div class="widget-about">
                    <div class="footer-logo">
                        <a href="index.html"><img class="logo-m"src="../assets/img/logo1.png" alt="Fitmas"></a>
                    </div>
                    <p class="about-text">Uma academia, também conhecida como centro de fitness ou clube de saúde, é uma
                        instalação dedicada à preparação física e academias de ginástica e normalmente oferece uma
                        variedade de equipamentos</p>
                    <div class="social-btn">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                        <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget widget_nav_menu footer-widget">
                <h3 class="widget_title">Links Rápidos</h3>
                <ul class="menu">
                    <li><a href={{ route('sobre') }}>Sobre Nós</a></li>
                    <li><a href={{ route('treino') }}>Treinos</a></li>
                    <li><a href={{ route('modalidade') }}>Modalidades</a></li>
                    <li><a href={{ route('noticias') }}>Notícias</a></li>
                    <li><a href={{ route('contato') }}>Contato</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Mobile Menu
    ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area text-center">
            <button class="menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo header-logo">
                <a href="index.html"><img src="../assets/img/logo-2.png" alt="Fitmas"></a>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href={{ route('home') }}>Home</a>
                    </li>
                    <li>
                        <a href={{ route('sobre') }}>Sobre</a>
                    </li>

                    <li class="menu-item-has-children">
                        <a href={{ route('treino') }}>Treinos</a>
                        <ul class="sub-menu">
                            <li><a href="team.html">Aulas</a></li>
                            <li><a href="team-2.html">Team Page 02</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children">
                        <a href={{ route('modalidade') }}>Modalidades</a>
                        <ul class="sub-menu">
                            <li><a href="service.html">Detalhes</a></li>
                            <li><a href="service-details.html">Treinos</a></li>
                        </ul>
                    </li>


                    <li class="menu-item-has-children">
                        <a href={{ route('noticias') }}>Noticias</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Detalhes</a></li>
                        </ul>
                    </li>


                    <li>
                        <a href={{ route('contato') }}>Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <header class="nav-header header-layout2">
        <div class="header-top d-lg-block d-none">
            <div class="container-fluid">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="far fa-envelope"></i><a href="mailto:info@gmail.com">support@gmail.com</a>
                                </li>
                                <li><i class="far fa-clock"></i>Seg - Sáb: 8.00 am-7.00 pm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li>
                                    <div class="social-links">
                                        <span class="me-3">Visite nossas redes sociais</span>
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-start justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href={{ route('home') }}><img src="../assets/img/logo1.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-auto m-lg-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li>
                                        <a href={{ route('home') }}>Home</a>
                                    </li>
                                    <li>
                                        <a href={{ route('sobre') }}>Sobre</a>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href={{ route('treino') }}>Treinos</a>
                                        <ul class="sub-menu">
                                            <li><a href="team.html">Aulas</a></li>
                                            <li><a href="team-2.html">Team Page 02</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href={{ route('modalidade') }}>Modalidades</a>
                                        <ul class="sub-menu">
                                            <li><a href={{ route('modalidade.musculacao') }}>Musculação</a></li>
                                            <li><a href={{ route('modalidade.cardiovascular') }}>Cardiovascular</a>
                                            </li>
                                            <li><a href={{ route('modalidade.crossfit') }}>CrossFit</a></li>
                                            <li><a href={{ route('modalidade.pilates') }}>Pilates</a></li>
                                            <li><a href={{ route('modalidade.yoga') }}>Yoga</a></li>
                                            <li><a href={{ route('modalidade.zumba') }}>Zumba</a></li>
                                            <li><a href={{ route('modalidade.box') }}>Box</a></li>
                                            <li><a href={{ route('modalidade.artes_marciais') }}>Artes Marciais</a>
                                            </li>
                                            <li><a href={{ route('modalidade.judo') }}>Judô</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href={{ route('noticias') }}>Noticias</a>
                                    </li>


                                    <li>
                                        <a href={{ route('contato') }}>Contato</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle icon-btn"><i
                                        class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-xxl-block d-none">
                            <div class="navbar-right-desc">
                                <i class="fas fa-phone-volume"></i><a href="tel:+2590256215">+259 (0) 256 215</a>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <a href={{ route('login') }} class="btn style2 style-r0 d-xl-block d-none">
                                    {{-- fazer Controller --}}
                                    Login
                                </a>
                            <div class="header-button">
                                <a href={{ route('dashboard.adm.admin') }} class="btn style2 style-r0 d-xl-block d-none">
                                    Cotação
                                </a>
                                <button type="button" class="btn style-r0 btn-border3 sideMenuToggler">
                                    <i class="far fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <main class="">
        @yield('conteudo')

    </main>

    <footer class="footer-wrapper footer-layout1" data-bg-src="../assets/img/bg/footer-1-bg.png">
        <div class="container">
            <div class="contact-card">
                <div class="info-card">
                    <div class="info-card_icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="info-card_content">
                        <p class="info-card_text">Localização da academia</p>
                        <a href="https://www.google.com/maps" class="info-card_link">Marina Lane Berlin</a>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-card_icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-card_content">
                        <p class="info-card_text">Endereço de e-mail</p>
                        <a href="mailto:health@Fitmas.com" class="info-card_link">health@Fitmas.com</a>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-card_icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="info-card_content">
                        <p class="info-card_text">Número de Telefone</p>
                        {{-- <a href="tel:+18925382145" class="info-card_link">(+189) 2538-2145</a> --}}
                        <a href="tel:+18925382145" class="info-card_link">(+189) 2538-2145</a>

                    </div>
                </div>
            </div>
        </div>

        <div class="map-sec">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2s!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
                allowfullscreen="" loading="lazy"></iframe>
        </div>


        <div class="container">
            <div class="widget-area">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="widget-about">
                                <div class="footer-logo">
                                    <a href="index.html"><img class="logo-footer" src="../../assets/img/logo-2.png"
                                            alt="Fitmas"></a>
                                </div>
                                <p class="about-text">Uma academia, também conhecida como centro de fitness ou clube de
                                    saúde, é uma instalação dedicada à preparação física e academias de ginástica e
                                    normalmente oferece uma variedade de equipamentos</p>
                                <div class="social-btn">
                                    <a href="https://twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/" tabindex="0"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/" tabindex="0"><i
                                            class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Links Rápidos</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href={{ route('sobre') }}>Sobre Nós</a></li>
                                    <li><a href={{ route('treino') }}>Treinos</a></li>
                                    <li><a href={{ route('modalidade') }}>Modalidades</a></li>
                                    <li><a href={{ route('noticias') }}>Notícias</a></li>
                                    <li><a href={{ route('contato') }}>Contato</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Galeria</h3>
                            <div class="sidebar-gallery">
                                <div class="gallery-thumb">
                                    <img src="../assets/img/widget/galeria1.png" alt="Gallery Image">
                                    <a href="../assets/img/widget/galeria1.png" class="gallery-btn popup-image"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="../assets/img/widget/galeria2.png" alt="Gallery Image">
                                    <a href="../assets/img/widget/galeria2.png" class="gallery-btn popup-image"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="../assets/img/widget/galeria3.png" alt="Gallery Image">
                                    <a href="../assets/img/widget/galeria3.png" class="gallery-btn popup-image"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="../assets/img/widget/galeria4.png" alt="Gallery Image">
                                    <a href="../assets/img/widget/galeria4.png" class="gallery-btn popup-image"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="../assets/img/widget/galeria5.png" alt="Gallery Image">
                                    <a href="../assets/img/widget/galeria5.png" class="gallery-btn popup-image"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="../assets/img/widget/galeria6.png" alt="Gallery Image">
                                    <a href="../assets/img/widget/galeria6.png" class="gallery-btn popup-image"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Receba e-mails Informativos</h3>
                            <p class="footer-text">Ganhe 10% de desconto na sua primeira mensalidade! Se apresse</p>
                            {{-- <form  action="{{ route('newsletter.salvar') }}" method="POST" class="newsletter-form" id="newsletter-form"> --}}
                            <form action="{{ route('newsletter.salvar') }}" method="POST" class="newsletter-form" id="newsletter-form">
                                @csrf
                                <div class="form-group">
                                    <i class="far fa-envelope"></i>
                                    <input class="form-control" name="emailNews" id="emailNews" type="email" placeholder="Endereço de Email" value="{{ old('emailNews') }}">
                                </div>
                                <button type="submit" class="btn style2" onclick="news_letters(event)">SE INSCREVA</button>
                                <div id="newsMensagem" class="msgContato"></div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-auto align-self-center">
                        <p class="copyright-text text-center">© 2023 <a href="#">VivaBem.</a> Todos os direitos
                            reservados</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    {{-- Script --}}

    <!--********************************
   Code End  Here
 ******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    <!--==============================
    All Js File
    ============================== -->


{{-- UTILIZEI O ASSET PARA SCRIPT FUNCIONAR, JÁ QUE TERIA QUE SAIR DE OUTRA PASTA, ENTÃO USEI O COMANDO ASSET --}}

    <!-- Jquery -->
    <script src={{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}></script>
    <!-- Slick Slider -->

    <script src={{ asset('assets/js/slick.min.js') }}></script>
    <!-- Bootstrap -->
    <script src={{ asset('assets/js/bootstrap.min.js') }}></script>
    <!-- Magnific Popup -->
    <script src= {{ asset('assets/js/jquery.magnific-popup.min.js') }}></script>
    <!-- Counter Up -->
    <script src= {{ asset('assets/js/jquery.counterup.min.js') }}></script>
    <!-- Range Slider -->
    <script src= {{ asset('assets/js/jquery-ui.min.js') }}></script>
    <!-- Flip Slider -->
    <script src= {{ asset('assets/js/jquery.flipster.min.js') }}></script>
    <!-- Isotope Filter -->
    <script src= {{ asset('assets/js/imagesloaded.pkgd.min.js') }}></script>
    <script src= {{ asset('assets/js/isotope.pkgd.min.js') }}></script>

    <script src= {{ asset('assets/js/bmi.calculator.js') }}></script>

    <!-- Main Js File -->
    <script src= {{ asset('assets/js/main.js') }}></script>

    {{-- Script --}}
    <script src= {{ asset('assets/js/script.js') }}></script>

</body>

</html>

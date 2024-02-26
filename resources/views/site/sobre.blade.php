@extends('layout.layout')
{{-- Esse conteudo sendo uma extensão da página layout --}}


@section('title','Sobre')

@section('conteudo')
{{-- Tudo que terá na página Sobre --}}




 <!--==============================
    SOBRE A ACADEMIA FOTO
    ============================== -->

    <img src="assets/img/about/fundoheader.png" class="img-fluid">

    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/sla.png">

        <!-- animação da img/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Sobre Nós</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">HOME</a></li>
                            <li class="active">Sobre Nós</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
    SOBRE A ACADEMIA
    ==============================-->
    <div class="space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2 text-lg-end">
                    <div class="about-thumb mb-5 mb-lg-0">
                        <img class="about-img-1" src="assets/img/normal/sobre2.png" alt="img">
                        <img class="about-img-2 jump" src="assets/img/normal/sobre.png" alt="img">
                    </div>
                </div>


                <div class="col-lg-6 order-lg-1">
                    <div class="about-content-wrap">
                        <div class="title-area mb-0">
                            <span class="sub-title">Mais sobre nós</span>
                            <h2 class="sec-title">Desbloqueie todo o seu potencial,
                                alcance seus objetivos.</h2>
                            <p class="sec-text">
                                Bem-vindo à Academia VivaBem, onde a saúde e o bem-estar são prioridades! Nossa equipe está pronta para guiá-lo em sua jornada de fitness, oferecendo programas personalizados para iniciantes e atletas experientes. Com instalações modernas e uma atmosfera motivada, na VivaBem você encontra o suporte necessário para atingir seus objetivos de forma única. Seja para aumentar a resistência, perder peso ou adotar um estilo de vida mais ativo, aqui você encontra as ferramentas e a comunidade certa. Junte-se a nós no VivaBem e comece a viver bem hoje!
                            </p>
                            <div class="about-tab-1">
                                <div class="filter-menu-active">
                                    <button data-filter=".cat1" class="active" type="button">Missão</button>
                                    <button data-filter=".cat2" type="button">Visão</button>
                                    <button data-filter=".cat3" type="button">Valores</button>
                                </div>
                                <div class="filter-active-cat1">
                                    <div class="filter-item cat1">
                                        <div class="about-tab-icon">
                                            <img src="assets/img/icon/about-iconn.svg" alt="img">
                                        </div>
                                        <p class="about-tab-text">Na Academia VivaBem, nossa missão é inspirar e capacitar indivíduos a alcançar o mais alto nível de bem-estar físico e mental. Buscamos fornecer um ambiente acolhedor e motivador, onde todos possam embarcar em uma jornada personalizada em direção à saúde total.</p>
                                    </div>
                                    <div class="filter-item cat2">
                                        <div class="about-tab-icon">
                                            <img src="assets/img/icon/about-iconn.svg" alt="img">
                                        </div>
                                        <p class="about-tab-text">
                                        <p class="about-tab-text">Nosso objetivo no VivaBem é ser reconhecido como o centro de referência em bem-estar, promovendo um estilo de vida ativo e saudável. Buscamos ser uma comunidade que transcende os limites do fitness, inspirando as pessoas a viverem suas vidas com vitalidade, equilíbrio e alegria.</p>

                                        </p>
                                    </div>
                                    <div class="filter-item cat3">
                                        <div class="about-tab-icon">
                                            <img src="assets/img/icon/about-iconn.svg" alt="img">
                                        </div>
                                        <p class="about-tab-text">Saúde Integral: Comprometemo-nos a abordar o bem-estar físico e mental, monitorando a importância de uma abordagem holística para uma vida saudável..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href="about.html" class="btn">Marque uma visita!</a>
                            <div class="about-info-wrap">
                                <div class="icon"><i class="fas fa-phone-volume"></i></div>
                                <div class="details">
                                    <p class="about-info-title">Precisa de ajuda?</p>
                                    <a class="about-info-link" href="tel:+25825692582">(+258) 2569 2582</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==============================
    SERVIÇOS MAIORES
    ==============================-->
    <div class="service-area-2 spaceS overflow-hidden">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2 testeee">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-1-1.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Gym Fitness Class</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2 testeee">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-2-2.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Power Lifting</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2 testeee">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-3-3.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Body Building</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2 testeee">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-4-4.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Boxing Class</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2 testeee">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-5-5.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Yoga Fitness Class</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2 testeee">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-6-6.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Meditation Class</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==============================
    Cta Area
    ==============================-->
    <section class="cta-area space" data-bg-src="assets/img/bg/visita.png">
        <div class="container">
            <div class="row justify-content-lg-end justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="cta-wrap text-center text-lg-start">
                        <div class="title-area">
                            <span class="sub-title">Contate-nos</span>
                            <h2 class="sec-title text-white">Obtenha uma visita gratuita agora mesmo aqui!</h2>
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href="about.html" class="btn style2">Marque uma visita</a>
                            <div class="about-info-wrap style3">
                                <div class="icon"><i class="fas fa-phone-volume"></i></div>
                                <div class="details">
                                    <p class="about-info-title text-white">Precisa de ajuda?</p>
                                    <a class="about-info-link" href="tel:+25825692582">(+258) 2569 2582</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>




<!--==============================
    EQUIPE
    ==============================-->
    <div class="team-area-1 space11">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title equipe">Nosso Time</span>
                <h2 class="sec-title">Conheça nossa equipe incrível</h2>
            </div>
            <div class="row global-carousel team-slider-1 slider-shadow" data-slide-show="4" data-ml-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-center-mode="true">
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="assets/img/team/people1.png" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">Joana Marques </a>
                            </h4>
                            <span class="team-card_desig">Professora - Zumba</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="assets/img/team/pessoa2.png" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">Lorena Oliveira</a>
                            </h4>
                            <span class="team-card_desig">Instrutora - Musculação</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="assets/img/team/pessoa3.png" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">Marcos Silva</a>
                            </h4>
                            <span class="team-card_desig">Instrutor - CrossFit</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="assets/img/team/pessoa4.png" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">Marina Ruiz</a>
                            </h4>
                            <span class="team-card_desig">Instrutora - Pilates:</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="assets/img/team/otario.png" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">Murilo Mendes</a>
                            </h4>
                            <span class="team-card_desig">Personal Trainer</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="assets/img/team/pessoa6.png" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">Gloria Bernarde</a>
                            </h4>
                            <span class="team-card_desig">Professora - Yoga</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

        <!--==============================
        Portfolio Area
    ==============================-->
    <div class="portfolio-area space-top space-extra-bottom">
        <div class="container">
            <div class="row gy-30">
                <div class="col-md-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/portfolio/porti1.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/portfolio/porti1.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/portfolio/porti2.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/portfolio/porti2.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/portfolio/porti5.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/portfolio/porti5.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/portfolio/porti6.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/portfolio/porti6.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/portfolio/porti7.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/portfolio/porti7.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/portfolio/porti3.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/portfolio/porti3.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/portfolio/porti4.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/portfolio/porti4.png" alt="portfolio">
                    </div>
                </div>
            </div>
            <div class="pagination justify-content-center">
                <ul>
                    <li><a href="blog.html">1</a></li>
                    <li><a href="blog.html">2</a></li>
                    <li><a href="blog.html">3</a></li>
                    <li><a href="blog.html"><i class="fas fa-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>


    @endsection

@extends('layout.layout');
{{-- Esse conteudo sendo uma extensão da página layout --}}

@section('title','Modalidade')


@section('conteudo')
{{-- Tudo que terá na página Modalidade --}}

<img src="assets/img/about/fundoheader.png" class="img-fluid">

 <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/banner-moda.png">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Our Services</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">HOME</a></li>
                            <li class="active">SERVICE</li>
                        </ul>
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
                            <img ass="top-mod" src="assets/img/icon/service-icon_2-1-1.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Musculação</a></h4>
                            <p class="service-card_text">Musculação é uma prática de exercícios com pesos, realizada em academias, para desenvolver força, resistência e aumentar a massa muscular. Executa-se uma variedade de exercícios que visam definição corporal e fortalecimento.
                            </p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>Leia Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2 testeee">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-2-2.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Treino Cardiovascular</a></h4>
                            <p class="service-card_text">Exercícios cardiovasculares, como correr, nadar e pedalar, têm o propósito de melhorar o condicionamento cardiovascular, aumentando a frequência cardíaca e proporcionando benefícios à circulação sanguínea e queima calórica.
                            </p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>Leia Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2 testeee">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/crossfit.png" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">CrossFit</a></h4>
                            <p class="service-card_text">CrossFit é um método de treinamento que combina levantamento de peso, ginástica e condicionamento metabólico. Com treinos intensos e variados, busca melhorias abrangentes, incluindo força, resistência, flexibilidade e coordenação.
                            </p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>Leia Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2 testeee">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/icon-pilates.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Pilates</a></h4>
                            <p class="service-card_text">Pilates concentra-se no fortalecimento equilibrado do corpo, melhorando postura e flexibilidade. Praticado em equipamentos específicos ou no solo, os exercícios priorizam o fortalecimento do "core" e incorporam princípios de respiração para promover consciência corporal.
                            </p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>Leia Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2 testeee">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/icon-yoga.png" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Yoga</a></h4>
                            <p class="service-card_text">Yoga é uma prática milenar que envolve posturas físicas, técnicas de respiração, meditação e filosofia de vida. Busca o equilíbrio físico, mental e espiritual, destacando-se pela conexão mente-corpo e benefícios emocionais, ciêntistas comprovam é realmente útil, pois envolve diversas técnicas.
                            </p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>Leia Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2 testeee">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/icon-zumba.png" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Zumba</a></h4>
                            <p class="service-card_text">Zumba, modalidade de fitness, combina movimentos de dança com aeróbicos, utilizando ritmos latinos. Além de benefícios cardiovasculares, destaca-se pela diversão durante os treinos, tornando-os dinâmicos e envolventes. Sem falar da felicidade de dançar né? Vamo dançar? Vem para a VivaBem!
                            </p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>Leia Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2 testeee">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/box2.png" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Box</a></h4>
                            <p class="service-card_text">Box, é uma modalidade que combina técnicas usadas em lutas, promovendo um treino completo. Integra técnicas de socos, esquivas e corridas, promovendo força, resistência física e alívio do estresse.
                            </p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>Leia Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2 testeee">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/artes1.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Artes Marciais</a></h4>
                            <p class="service-card_text">Artes marciais abrangem disciplinas como karatê, taekwondo e jiu-jitsu, cada uma com técnicas específicas de ataque e defesa. Além do físico, enfatizam valores como disciplina, respeito e autocontrole.
                            </p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>Leia Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2 testeee">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/judo1.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Judô</a></h4>
                            <p class="service-card_text">Judô, arte marcial japonesa, destaca-se por técnicas de projeção e imobilização. Além do aspecto esportivo, enfatiza valores éticos como respeito mútuo e cortesia, contribuindo para o desenvolvimento físico, mental e moral.</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>Leia Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
     METAS
    ==============================-->
    <section class="goal-area space">
        <div class="container container2">
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div class="goal-thumb-2 mb-40 mb-lg-0">
                        <div class="img-1">
                            <img src="assets/img/normal/goal_2-2.png" alt="img">
                        </div>
                        <div class="img-2 jump">
                            <img src="assets/img/normal/goal_2-1.png" alt="img">
                        </div>
                        <div class="wcu-grid movingX">
                            <div class="icon">
                                <img src="assets/img/icon/wcu-icon_1-1.svg" alt="img">
                            </div>
                            <div class="details">
                                <h3 class="wcu-grid_year"><span class="counter-number">25</span>+</h3>
                                <span class="wcu-grid_text">Years Experience</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="title-area">
                        <span class="sub-title">Fitmas Goal
                        </span>
                        <h2 class="sec-title fw-semibold">UNLOCK YOUR FULL POTENTIAL, ACHIEVE YOUR FITNESS GOALS.</h2>
                    </div>
                    <div class="goal-grid-wrap">
                        <div class="about-grid style3">
                            <div class="about-grid_icon">
                                <img src="assets/img/icon/goal-icon_1-1.svg" alt="img">
                            </div>
                            <div class="about-grid_content">
                                <h4 class="about-grid_title">Free Fitness Training</h4>
                                <p class="about-grid_text">Pedal your way to fitness in our specialized indoor cycling studio. Equipped with stationary bikes...</p>
                            </div>
                        </div>
                        <div class="about-grid style3">
                            <div class="about-grid_icon">
                                <img src="assets/img/icon/goal-icon_1-2.svg" alt="img">
                            </div>
                            <div class="about-grid_content">
                                <h4 class="about-grid_title">Cardio and Strength</h4>
                                <p class="about-grid_text">Pedal your way to fitness in our specialized indoor cycling studio. Equipped with stationary bikes...</p>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <a class="btn style-r0" href="service-details.html">Learn More</a>
                            <a class="btn btn-border style-r0" href="service-details.html">View All Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                                <div class="icon icon-ct"><i class="fas fa-phone-volume"></i></div>
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
    PLANOS
    ==============================-->

    <div class="pricing-area">
        <div class="container">
            <div class="title-area text-center">
                <h3 class="sub-title">Planos de Preço</h3>
                <h2 class="sec-title">Nossos Planos</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card">
                        <div class="pricing-card_bg">
                            <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                        </div>
                        <div class="pricing-card_icon">
                            <img src="assets/img/icon/picing-icon_1-1.svg" alt="img">
                        </div>
                        <h3 class="pricing-card_title">Plano Básica</h3>
                        <h4 class="pricing-card_price"><span class="currency">$</span>19<span class="duration">/mês</span>
                        </h4>
                        <p class="pricing-card_content">Esta categoria normalmente oferece acesso às instalações e equipamentos da academia.</p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>12 treinamentos</li>
                                <li><i class="far fa-check-circle"></i>Chuveiro e armários gratuitos</li>
                                <li><i class="far fa-check-circle"></i>Tapete de ioga pessoal</li>
                                <li><i class="far fa-check-circle"></i>Estacionamento grátis</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="pricing.html">Escolha esse Plano</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card pricing-card_active">
                        <div class="pricing-card_bg">
                            <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                        </div>
                        <div class="pricing-card_icon">
                            <img src="assets/img/icon/picing-icon_1-2.svg" alt="img">
                        </div>
                        <h3 class="pricing-card_title">Plano Padrão</h3>
                        <h4 class="pricing-card_price"><span class="currency">$</span>39<span class="duration">/mês</span>
                        </h4>
                        <p class="pricing-card_content">Esta categoria normalmente oferece acesso às instalações e equipamentos da academia. </p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>12 treinamentos</li>
                                <li><i class="far fa-check-circle"></i>Chuveiro e armários gratuitos</li>
                                <li><i class="far fa-check-circle"></i>Tapete de ioga pessoal</li>
                                <li><i class="far fa-check-circle"></i>Estacionamento grátis</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="pricing.html">Escolha esse Plano</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card">
                        <div class="pricing-card_bg">
                            <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                        </div>
                        <div class="pricing-card_icon">
                            <img src="assets/img/icon/picing-icon_1-3.svg" alt="img">
                        </div>
                        <h3 class="pricing-card_title">Plano Premium</h3>
                        <h4 class="pricing-card_price"><span class="currency">$</span>69<span class="duration">/mês</span>
                        </h4>
                        <p class="pricing-card_content">Esta categoria normalmente oferece acesso às instalações e equipamentos da academia. </p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>12 treinamentos</li>
                                <li><i class="far fa-check-circle"></i>Chuveiro e armários gratuitos</li>
                                <li><i class="far fa-check-circle"></i>Tapete de ioga pessoal</li>
                                <li><i class="far fa-check-circle"></i>Estacionamento grátis</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="pricing.html">Escolha esse Plano</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

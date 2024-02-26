@extends('layout.layout')
{{-- Esse conteudo sendo uma extensão da página layout --}}


@section('title','CrossFit')

@section('conteudo')
{{-- Tudo que terá na página de CrossFit --}}

<img src="../assets/img/about/fundoheader.png" class="img-fluid">

<!--==============================
    Breadcumb
    ============================== -->

    {{-- <div class="breadcumb-wrapper" data-bg-src="../assets/img/banner-musc.png"> --}}
        <div class="breadcumb-wrapper background-image" style=" background-image: url(../assets/img/bg/banner-musc1.png);}" data-bg-src="../assets/img/bg/banner-musc1.png">
            <!-- bg animated image/ -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">CrossFit Detalhes</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="index.html">MODALIDADE</a></li>
                                <li class="active">CROSSFIT</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==============================
        Service Area 02
        ==============================-->
        <div class="service-details-area space-top space-extra-bottom overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-lg-7">
                        <div class="service-page-single">
                            <div class="page-img mb-50">
                                <img src="../assets/img/normal/cross1.png" alt="img">
                            </div>
                            <div class="page-content">
                                <h2 class="page-title">CrossFit</h2>
                                <p class="mb-30">O CrossFit, uma modalidade de treinamento físico funcional, ganhou enorme popularidade por sua abordagem dinâmica e desafiadora. Incorporando elementos de levantamento de peso olímpico, treinamento de resistência, cardio e ginástica, o CrossFit busca desenvolver um condicionamento físico abrangente. Os treinos são variados e intensos, muitas vezes incluindo movimentos como levantamento de peso, corrida, saltos, remo e exercícios calistênicos. A filosofia central do CrossFit é preparar os praticantes para qualquer demanda física, promovendo a adaptação constante e a superação de limites individuais.</p>
                                <p class="mb-50">O ambiente comunitário é uma característica marcante do CrossFit. Os treinos são frequentemente realizados em grupos, e a cultura encoraja a camaradagem e o apoio mútuo. O método de treinamento intensivo e o foco na superação de desafios pessoais têm atraído uma comunidade diversificada de entusiastas, desde iniciantes até atletas experientes. O CrossFit não apenas desafia fisicamente, mas também fortalece mentalmente, incentivando os participantes a enfrentarem novos desafios, estabelecerem metas ambiciosas e celebrarem conquistas.
                                </p>
                                <h3 class="page-subtitle mb-0">Treino CrossFit</h3>
                                <p>Como acontece os treinos de Crossfit?</p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="service-wrap">
                                            <h6><i class="far fa-check me-2"></i> Escolha do treino</h6>
                                            <p>A escolha do tipo de treino na academia pode depender de vários fatores, incluindo seus objetivos pessoais, nível de condicionamento físico, preferências individuais e qualquer consideração específica de saúde. Sendo assim é importante ter em mente o seu nível atual de condicionamento físico e qual é seu objetivo com os treinos. </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="service-wrap">
                                            <h6><i class="far fa-check me-2"></i> Seleção de exercícios</h6>
                                            <p>A seleção dos exercícios em um programa de treino é uma parte crucial para alcançar suas metas. Primeiro  identificamos quais são seus objetivos específicos, como perda de peso, ganho de massa muscular, melhoria da resistência cardiovascular ou aumento da flexibilidade. A escolha dos exercícios deve estar alinhada com esses objetivos.</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-25 mb-50">Na academia oferecemos uma ampla lista de serviços e programas de condicionamento físico para atender a diferentes níveis, interesses e objetivos de condicionamento físico. Quer procure treino pessoal, aulas de fitness em grupo, treinos especializados ou orientação nutricional, temos opções que se adaptam às suas necessidades.</p>
                                <h3 class="page-subtitle mb-0">Porque o CrossFit?</h3>

                                {{-- <div class="service-page-list checklist mb-50" data-bg-src="../assets/img/normal/service-details1-2.png"> --}}
                                <div class="service-page-list checklist mb-50" style=" background-image: url(../assets/img/normal/cross-ft2.png);}" data-bg-src="../assets/img/normal/cross-ft2.png">

                                    <ul>
                                        <li><i class="far fa-check-circle"></i>Queima de Calorias e Controle do Peso.</li>
                                        <li><i class="far fa-check-circle"></i>Comunidade e Motivação.</li>
                                        <li><i class="far fa-check-circle"></i>Adaptação a Diferentes Níveis de Aptidão.</li>
                                        <li><i class="far fa-check-circle"></i>Condicionamento Físico Abrangente.</li>
                                        <li><i class="far fa-check-circle"></i>Eficiência e Variedade.</li>
                                    </ul>
                                </div>

                                <div class="accordion-area mb-30 accordion" id="faqAccordion">

                                    <div class="accordion-card style2 active">
                                        <div class="accordion-header" id="collapse-item-1">
                                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">Quais são os princípios fundamentais do CrossFit?</button>
                                        </div>
                                        <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Os princípios fundamentais do CrossFit incluem a prática de movimentos funcionais, a execução de exercícios em alta intensidade e a variabilidade nos treinos. A ideia é preparar os praticantes para qualquer demanda física da vida cotidiana, promovendo uma aptidão física abrangente.</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="collapse-item-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">Quem pode praticar CrossFit?</button>
                                        </div>
                                        <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">O CrossFit é adaptável a diferentes níveis de condicionamento físico e idades. Desde iniciantes até atletas experientes, qualquer pessoa pode participar. Os treinos podem ser modificados para atender às necessidades específicas de cada indivíduo, tornando o CrossFit inclusivo para uma ampla gama de participantes.</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="collapse-item-3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">Quero fazer Crossfit, porém tenho dificuldades sociais, alguma diga?</button>
                                        </div>
                                        <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    Além dos benefícios físicos, o CrossFit oferece vantagens sociais significativas. A prática em grupo promove um senso de comunidade e camaradagem entre os participantes. A atmosfera de apoio e motivação ajuda a criar laços entre os atletas, tornando a jornada de fitness mais envolvente e gratificante, então vale a pena tentar.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-5">
                        <aside class="sidebar-area">
                            <div class="widget widget_categories">
                                <h3 class="widget_title">Todas Modalidades</h3>
                                <ul>
                                    <li>
                                        <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Pilates</a>
                                    </li>
                                    <li>
                                        <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Yoga</a>
                                    </li>
                                    <li>
                                        <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Zumba</a>
                                    </li>
                                    <li>
                                        <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Box</a>
                                    </li>
                                    <li>
                                        <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Artes Marciais</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget_schedule">
                                <h3 class="widget_title">Horários</h3>
                                <ul>
                                    <li>
                                        <i class="far fa-clock"></i>
                                        Monday – Friday -08:00 – 21:30 pm
                                    </li>
                                    <li>
                                        <i class="far fa-clock"></i>
                                        Saturday 09:00 – 16:00 pm
                                    </li>
                                    <li class="unavailable">
                                        <i class="far fa-clock"></i>
                                        Domingo fechado
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>

        <!--==============================
        Cta Area
        ==============================-->
        <section class="cta-area space" data-bg-src={{ asset('assets/img/bg/contato-cross.png') }}>
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
                                <img src= {{ asset('assets/img/bg/pricing-card1-bg.png') }}alt="img">
                            </div>
                            <div class="pricing-card_icon">
                                <img src= {{ asset('assets/img/icon/picing-icon_1-1.svg') }} alt="img">
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
                                <img src= {{ asset('assets/img/bg/pricing-card1-bg.png') }} alt="img">
                            </div>
                            <div class="pricing-card_icon">
                                <img src= {{ asset('assets/img/icon/picing-icon_1-2.svg') }} alt="img">
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
                                <img src= {{ asset('') }}assets/img/bg/pricing-card1-bg.png" alt="img">
                            </div>
                            <div class="pricing-card_icon">
                                <img src= {{ asset('') }}assets/img/icon/picing-icon_1-3.svg" alt="img">
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


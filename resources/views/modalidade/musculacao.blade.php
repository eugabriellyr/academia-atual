@extends('layout.layout')
{{-- Esse conteudo sendo uma extensão da página layout --}}


@section('title','Musculação')

@section('conteudo')
{{-- Tudo que terá na página Musculação --}}

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
                        <h1 class="breadcumb-title">Musculação Detalhes</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">MODALIDADE</a></li>
                            <li class="active">MUSCULAÇÃO</li>
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
                            <img src="../assets/img/normal/musc.png" alt="img">
                        </div>
                        <div class="page-content">
                            <h2 class="page-title">Musculação</h2>
                            <p class="mb-30">A Musculação é uma modalidade de exercício físico que se destaca por seu foco no desenvolvimento e fortalecimento dos músculos. Durante um treino de musculação, os praticantes realizam uma série de exercícios que envolvem a contração e o alongamento dos músculos, geralmente utilizando pesos ou máquinas específicas. Esse tipo de treinamento não apenas promove o aumento da massa muscular, mas também contribui para a melhoria da resistência, da força e da densidade óssea.</p>
                            <p class="mb-50">Além disso, a musculação oferece benefícios para a saúde geral do corpo. Ao fortalecer os músculos, o treino de musculação pode ajudar na prevenção de lesões, na correção da postura e no aumento do metabolismo, favorecendo a perda de peso. Além disso, é uma prática versátil, adaptável a diferentes objetivos, seja para ganho de massa muscular, tonificação ou definição. A musculação também desempenha um papel crucial no suporte à saúde mental, uma vez que a liberação de endorfinas durante o exercício pode melhorar o humor e reduzir o estresse.</p>
                            <h3 class="page-subtitle mb-0">Treino de Musculação</h3>
                            <p>Como acontece os treinos de musculação?</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="service-wrap">
                                        <h6><i class="far fa-check me-2"></i> Escolha do treino</h6>
                                        <p>Os treinos de Musculação na nossa academia usam aparelhos que geralmente seguem um padrão estruturado para atingir objetivos específicos de condicionamento físico, força ou hipertrofia. </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="service-wrap">
                                        <h6><i class="far fa-check me-2"></i> Seleção de exercícios</h6>
                                        <p> Com base nos objetivos do praticante, o treinador ou uma pessoa pode escolher uma série de exercícios que visem diferentes grupos musculares. Os aparelhos são selecionados com base na função muscular desejada.</p>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-25 mb-50">Na academia oferecemos uma ampla lista de serviços e programas de condicionamento físico para atender a diferentes níveis, interesses e objetivos de condicionamento físico. Quer procure treino pessoal, aulas de fitness em grupo, treinos especializados ou orientação nutricional, temos opções que se adaptam às suas necessidades.</p>
                            <h3 class="page-subtitle mb-0">Porque treinar musculação?</h3>

                            {{-- <div class="service-page-list checklist mb-50" data-bg-src="../assets/img/normal/service-details1-2.png"> --}}
                            <div class="service-page-list checklist mb-50" style=" background-image: url(../assets/img/normal/woman3.png);}" data-bg-src="../assets/img/normal/woman3.png">

                                <ul>
                                    <li><i class="far fa-check-circle"></i>Desenvolvimento Muscular.</li>
                                    <li><i class="far fa-check-circle"></i>Melhoria da Saúde Óssea.</li>
                                    <li><i class="far fa-check-circle"></i>Controle de Peso e Metabolismo.</li>
                                    <li><i class="far fa-check-circle"></i>Melhoria na Postura e Flexibilidade</li>
                                    <li><i class="far fa-check-circle"></i>Benefícios Mentais e Emocionais.</li>
                                </ul>
                            </div>

                            <div class="accordion-area mb-30 accordion" id="faqAccordion">

                                <div class="accordion-card style2 active">
                                    <div class="accordion-header" id="collapse-item-1">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1"> Qual é o horário dos treinos de musculação?</button>
                                    </div>
                                    <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">Os horários dos treinos é você que escolhe! Para se adaptar a sua rotina e ter flexibilidade, basta nos comunicar suas preferências que montamos seu cronograma de maneira fácil e rápida e do seu jeito! </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-card style2">
                                    <div class="accordion-header" id="collapse-item-2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">Que comodidades e instalações sua academia oferece ?</button>
                                    </div>
                                    <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">Nossa academia oferece uma ampla gama de comodidades e instalações para atender às diversas necessidades de nossos membros, proporcionando uma experiência completa de treinamento. Contamos com diversas salas e vários espaços com equipamentos diversos e  aparelhos de última geração, proporcionando um ambiente propício para o desenvolvimento de força e resistência. Para aqueles que buscam variedade em seus treinos, oferecemos uma área dedicada a exercícios diferentes.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-card style2">
                                    <div class="accordion-header" id="collapse-item-3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">Você fornece treinamento pessoal?</button>
                                    </div>
                                    <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">
                                                Sim, em nossa academia, oferecemos serviços de treinamento pessoal altamente personalizados para atender às necessidades individuais de nossos membros. Nossos treinadores pessoais são profissionais especializados, prontos para criar programas de treinamento adaptados aos objetivos específicos de cada pessoa. Seja o objetivo aumentar a força, perder peso, melhorar a resistência ou alcançar metas específicas de condicionamento físico, nossos treinadores trabalham em estreita colaboração com os membros para desenvolver planos de treinamento treinados e motivadores. </p>
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
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Cardiovascular</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>CrossFit</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Pilates</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Yoga</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Zumba..</a>
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
    <section class="cta-area space" data-bg-src={{ asset('assets/img/bg/contato-musc1.png') }}>
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

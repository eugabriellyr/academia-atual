@extends('layout.layout')
{{-- Esse conteudo sendo uma extensão da página layout --}}


@section('title','Cardiovascular')

@section('conteudo')
{{-- Tudo que terá na página de Cardiovascular --}}


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
                            <h1 class="breadcumb-title">Cardiovascular Detalhes</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="index.html">MODALIDADE</a></li>
                                <li class="active">CARDIOVASCULAR</li>
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
                                <img src="../assets/img/normal/cardio2.png" alt="img">
                            </div>
                            <div class="page-content">
                                <h2 class="page-title">Cardiovascular</h2>
                                <p class="mb-30">A modalidade cardiovascular, muitas vezes conhecida como treinamento aeróbico, desempenha um papel fundamental na promoção da saúde cardiovascular e no aprimoramento da resistência física. Esse tipo de exercício envolve atividades que aumentam a frequência cardíaca e melhoram a eficiência do sistema cardiovascular, beneficiando o coração e os pulmões. Correr, nadar, andar de bicicleta e pular corda são exemplos comuns de atividades cardiovasculares que elevam a respiração e a frequência cardíaca, fortalecendo o músculo cardíaco ao longo do tempo.</p>
                                <p class="mb-50">Além dos benefícios diretos para o sistema circulatório, o treinamento cardiovascular tem implicações positivas para a gestão do peso, aprimoramento do humor e redução do estresse. A queima de calorias durante essas atividades contribui para a perda de peso e a manutenção de um corpo saudável. Além disso, a liberação de endorfinas durante o treino promove uma sensação de bem-estar, ajudando a aliviar a ansiedade e o estresse. Integrar atividades cardiovasculares de forma regular na rotina de exercícios não apenas beneficia a saúde física, mas também melhora o equilíbrio emocional, promovendo um estilo de vida mais saudável e ativo.</p>
                                <h3 class="page-subtitle mb-0">Treino Cardiovascular</h3>
                                <p>Como acontece os treinos cardiovasculares?</p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="service-wrap">
                                            <h6><i class="far fa-check me-2"></i> Escolha do treino</h6>
                                            <p>A escolha do treino cardiovascular deve levar em consideração diversos fatores, incluindo os objetivos específicos da pessoa, o nível de condicionamento físico, as opções individuais e eventuais restrições ou limitações. Antes de iniciar atividades cardiovasculares intensas, é crucial aquecer o corpo para prepará-lo para o exercício.   </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="service-wrap">
                                            <h6><i class="far fa-check me-2"></i> Seleção de exercícios</h6>
                                            <p>Determine se o objetivo é melhorar a saúde cardiovascular, perder peso, aumentar a resistência ou atingir metas específicas. Assim haverá a seleção da atividade principal que elevará a frequência cardíaca dependendo do seu objetivo. Pode incluir corrida, ciclismo, natação, pular corda, entre outras opções.</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-25 mb-50">Na academia oferecemos uma ampla lista de serviços e programas de condicionamento físico para atender a diferentes níveis, interesses e objetivos de condicionamento físico. Quer procure treino pessoal, aulas de fitness em grupo, treinos especializados ou orientação nutricional, temos opções que se adaptam às suas necessidades.</p>
                                <h3 class="page-subtitle mb-0">Porque treino cardiovascular?</h3>

                                {{-- <div class="service-page-list checklist mb-50" data-bg-src="../assets/img/normal/service-details1-2.png"> --}}
                                <div class="service-page-list checklist mb-50" style=" background-image: url(../assets/img/normal/cardio3.png);}" data-bg-src="../assets/img/normal/cardio3.png">

                                    <ul>
                                        <li><i class="far fa-check-circle"></i>Melhora da Saúde Cardiovascular.</li>
                                        <li><i class="far fa-check-circle"></i>Controle de Peso e Queima de Calorias.</li>
                                        <li><i class="far fa-check-circle"></i>Aumento da Resistência e Energia.</li>
                                        <li><i class="far fa-check-circle"></i>Redução do Estresse e Melhoria do Humor.</li>
                                        <li><i class="far fa-check-circle"></i>Aumento da Qualidade do Sono.</li>
                                    </ul>
                                </div>

                                <div class="accordion-area mb-30 accordion" id="faqAccordion">

                                    <div class="accordion-card style2 active">
                                        <div class="accordion-header" id="collapse-item-1">
                                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">Qual é o motivo do treino cardiovascular ser tão importante?</button>
                                        </div>
                                        <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">O treino cardiovascular fortalece o coração, melhorando sua eficiência em bombear sangue para o resto do corpo. Além disso as atividades cardiovasculares são eficazes na queima de calorias, o que auxilia no controle do peso, sendo assim aumentando a qualidade de vida. </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="collapse-item-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">O treino cardiovascular possui aulas pessoais?</button>
                                        </div>
                                        <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Sim, nossa academia oferece aulas pessoais de treinamento cardiovascular. Estas aulas são ministradas por instrutores especializados, como personal trainers, podem e são projetadas para atender às necessidades individuais dos alunos.</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="collapse-item-3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">É difícil os treinos cardiovasculares?</button>
                                        </div>
                                        <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    A dificuldade dos treinos cardiovasculares pode variar dependendo do nível de condicionamento físico individual, das opções pessoais e do tipo de exercício escolhido. Mas pode ficar tranquilo tá? Nós adaptamos para você do melhor jeito possível.</p>
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
                                        <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>CrossFit</a>
                                    </li>
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
                                        <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Box..</a>
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
        <section class="cta-area space" data-bg-src={{ asset('assets/img/bg/contato-cardio1.png') }}>
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


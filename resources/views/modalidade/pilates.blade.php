@extends('layout.layout')
{{-- Esse conteudo sendo uma extensão da página layout --}}


@section('title','Pilates')

@section('conteudo')
{{-- Tudo que terá na página de Pilates --}}

<img src="../assets/img/about/fundoheader.png" class="img-fluid">

<!--==============================
    Breadcumb
    ============================== -->

    {{-- <div class="breadcumb-wrapper" data-bg-src="../assets/img/banner-musc.png"> --}}
        <div class="breadcumb-wrapper background-image" style=" background-image: url(../assets/img/bg/banner-pilates.png);}" data-bg-src="../assets/img/bg/banner-pilates.png">
            <!-- bg animated image/ -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Pilates Detalhes</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="index.html">MODALIDADE</a></li>
                                <li class="active">PILATES</li>
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
                                <img src="../assets/img/normal/pilates1.png" alt="img">
                            </div>
                            <div class="page-content">
                                <h2 class="page-title">Pilates</h2>
                                <p class="mb-30">O Pilates, criado por Joseph Pilates no início do século 20, é uma modalidade de exercício que visa fortalecer o corpo de maneira equilibrada, melhorar a postura e promover a consciência corporal. Baseado em princípios como controle, concentração, fluidez, respiração, centralização e precisão, o Pilates é conhecido por seu foco na qualidade dos movimentos. Os exercícios de Pilates são geralmente realizados em um tapete ou em aparelhos específicos, como o Reformer, e enfatizam o desenvolvimento de músculos profundos, ajudando a melhorar a estabilidade do tronco e a flexibilidade.</p>
                                <p class="mb-50">O Pilates é uma prática versátil que pode ser adaptada para atender a uma variedade de necessidades e níveis de condicionamento físico. Além de fortalecer os músculos, o Pilates é frequentemente utilizado como uma abordagem terapêutica para reabilitação de lesões, especialmente nas costas. Sua ênfase na conexão mente-corpo também oferece benefícios adicionais, como redução do estresse e melhoria da consciência postural no dia a dia. A abordagem holística do Pilates, integrando corpo e mente, faz com que seja uma opção popular para aqueles que buscam uma prática de exercício que vá além do físico, promovendo bem-estar geral.
                                </p>
                                <h3 class="page-subtitle mb-0">Aula de Pilates</h3>
                                <p>Como acontece os treinos de pilates?</p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="service-wrap">
                                            <h6><i class="far fa-check me-2"></i> Escolha da aula</h6>
                                            <p>A escolha do treino de Pilates pode depender de vários fatores, incluindo os objetivos pessoais, o nível de experiência, as necessidades específicas do corpo e até mesmo as preferências individuais. Considere o seu nível de experiência com o Pilates. Iniciantes podem começar com treinos mais básicos e, à medida que ganham familiaridade e força, progredir para exercícios mais avançados. Escolha o tipo de treino que você quer pode estar entre a prática no tapete (Mat Pilates) e o uso de aparelhos.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="service-wrap">
                                            <h6><i class="far fa-check me-2"></i> Seleção de exercícios</h6>
                                            <p>Conhecer os seus objetivos é fundamental. Se o objetivo é fortalecimento muscular, flexibilidade, melhoria da postura.., os exercícios serão escolhidos de acordo. Depois antes de recomendar exercícios, é crucial realizar uma avaliação inicial. Isso pode incluir uma avaliação postural, análise da flexibilidade, força e qualquer preocupação específica do cliente. A avaliação ajuda a identificar áreas de foco e determinar quais exercícios serão mais benéficos.</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-25 mb-50">Na academia oferecemos uma ampla lista de serviços e programas de condicionamento físico para atender a diferentes níveis, interesses e objetivos de condicionamento físico. Quer procure treino pessoal, aulas de fitness em grupo, treinos especializados ou orientação nutricional, temos opções que se adaptam às suas necessidades.</p>
                                <h3 class="page-subtitle mb-0">Porque Pilates?</h3>

                                {{-- <div class="service-page-list checklist mb-50" data-bg-src="../assets/img/normal/service-details1-2.png"> --}}
                                <div class="service-page-list checklist mb-50" style=" background-image: url(../assets/img/normal/pilates2.png);}" data-bg-src="../assets/img/normal/pilates2.png">

                                    <ul>
                                        <li><i class="far fa-check-circle"></i>Fortalecimento Muscular.</li>
                                        <li><i class="far fa-check-circle"></i>Melhoria da Flexibilidade.</li>
                                        <li><i class="far fa-check-circle"></i>Aprimoramento da Consciência Corporal</li>
                                        <li><i class="far fa-check-circle"></i>Promoção do Bem-Estar Mental.</li>
                                        <li><i class="far fa-check-circle"></i>Alívio de Dores nas Costas e Prevenção de Lesões.</li>
                                    </ul>
                                </div>

                                <div class="accordion-area mb-30 accordion" id="faqAccordion">

                                    <div class="accordion-card style2 active">
                                        <div class="accordion-header" id="collapse-item-1">
                                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">O Pilates é adequado para todas as idades e níveis de aptidão?</button>
                                        </div>
                                        <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Sim, o Pilates é uma prática adaptável e pode ser modificado para atender às necessidades de diferentes idades e níveis de aptidão. Seja você um iniciante ou um atleta experiente, o Pilates oferece benefícios e pode ser personalizado para atender aos seus objetivos específicos.</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="collapse-item-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">Sofro de dores nas costas, Pilates seria bom?</button>
                                        </div>
                                        <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">O Pilates é frequentemente recomendado para pessoas com dores nas costas devido ao seu foco no fortalecimento do core e na melhoria da postura. Os exercícios ajudam a fortalecer os músculos abdominais e das costas, proporcionando suporte à coluna vertebral e aliviando as dores nas costas. Além disso, a prática regular pode prevenir futuras lesões na região lombar.

                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="collapse-item-3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">Qual é a diferença entre Pilates no tapete (Mat Pilates) e Pilates com aparelhos (Reformer, Cadillac, etc.)?</button>
                                        </div>
                                        <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">O Pilates no tapete, ou Mat Pilates, envolve a realização de exercícios no chão usando apenas um tapete de exercícios. Já o Pilates com aparelhos, como o Reformer ou o Cadillac, incorpora equipamentos específicos que oferecem resistência ajustável e suporte para a execução dos movimentos. Ambas as modalidades proporcionam benefícios, mas o uso de aparelhos permite uma variedade maior de exercícios e pode oferecer desafios adicionais. A escolha entre Mat Pilates e Pilates com aparelhos pode depender das preferências pessoais e dos objetivos do praticante.</p>
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
                                    <li>
                                        <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Judô..</a>
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
        <section class="cta-area space" data-bg-src={{ asset('assets/img/bg/contato-pilates1.png') }}>
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


@extends('layout.layout')
{{-- Esse conteudo sendo uma extensão da página layout --}}


@section('title','Box')

@section('conteudo')
{{-- Tudo que terá na página de Box --}}

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
                            <h1 class="breadcumb-title">Yoga Detalhes</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="index.html">MODALIDADE</a></li>
                                <li class="active">YOGA</li>
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
                                <img src="../assets/img/normal/yoga1.png" alt="img">
                            </div>
                            <div class="page-content">
                                <h2 class="page-title">Yoga</h2>
                                <p class="mb-30">O Yoga, uma prática milenar originária da Índia, é muito mais do que uma atividade física; é uma jornada holística que busca a integração do corpo, mente e espírito. Fundamentado em uma filosofia que promove a união e o equilíbrio, o Yoga incorpora uma variedade de técnicas que incluem posturas físicas, respiração consciente, meditação e princípios éticos. Ao adentrar uma sessão de Yoga, os praticantes são guiados por um caminho de autorreflexão, focando não apenas na realização de poses, mas na conexão com a respiração e na exploração do presente. A prática regular do Yoga não apenas aprimora a força, flexibilidade e equilíbrio físico, mas também nutre a paz interior, reduzindo o estresse e proporcionando uma sensação duradoura de bem-estar.</p>
                                <p class="mb-50">Cada estilo de Yoga oferece uma abordagem única para a jornada interior, permitindo que os praticantes escolham uma prática que se alinhe com suas metas e preferências. Seja em uma aula energizante de Vinyasa, que sincroniza movimentos fluidos com a respiração, ou em uma sessão mais tranquila de Yin Yoga, focada no relaxamento e na permanência em posturas por períodos prolongados, o Yoga oferece um espaço para autodescoberta e aceitação. Além dos benefícios físicos tangíveis, como aumento da flexibilidade e fortalecimento muscular, o Yoga é um convite para uma jornada interior que transcende o tapete de prática, influenciando positivamente a maneira como enfrentamos desafios, interagimos com o mundo e cultivamos um estado duradouro de equilíbrio e serenidade.
                                </p>
                                <h3 class="page-subtitle mb-0">Treino Yoga</h3>
                                <p>Como acontece os treinos de yoga?</p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="service-wrap">
                                            <h6><i class="far fa-check me-2"></i> Escolha do treino</h6>
                                            <p>A escolha do treino de Yoga pode depender de vários fatores, incluindo suas metas, nível de experiência, preferências pessoais e necessidades específicas. Considere o seu nível de experiência com o Yoga. Se você é iniciante, pode ser benéfico começar com aulas específicas para principiantes ou aulas mais suaves. Também é bom se atentar a diferentes estilos de Yoga, cada um com abordagens distintas e escolher o melhor para você.  </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="service-wrap">
                                            <h6><i class="far fa-check me-2"></i> Seleção de exercícios</h6>
                                            <p>Cada exercício de Yoga precisa ser com base em objetivos específicos, como fortalecimento, flexibilidade, relaxamento ou equilíbrio. Nossos instrutores consideram o nível de habilidade dos participantes, para assim chegar a lista de exerícios. Cada aula de Yoga pode ter uma intenção específica, seja cultivar gratidão, encontrar equilíbrio ou liberar tensões. Os exercícios são escolhidos de acordo com essa intenção, criando uma experiência holística.</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-25 mb-50">Na academia oferecemos uma ampla lista de serviços e programas de condicionamento físico para atender a diferentes níveis, interesses e objetivos de condicionamento físico. Quer procure treino pessoal, aulas de fitness em grupo, treinos especializados ou orientação nutricional, temos opções que se adaptam às suas necessidades.</p>
                                <h3 class="page-subtitle mb-0">Porque Pilates?</h3>

                                {{-- <div class="service-page-list checklist mb-50" data-bg-src="../assets/img/normal/service-details1-2.png"> --}}
                                <div class="service-page-list checklist mb-50" style=" background-image: url(../assets/img/normal/yoga2.png);}" data-bg-src="../assets/img/normal/yoga2.png">

                                    <ul>
                                        <li><i class="far fa-check-circle"></i>Fortalecimento Muscular e Flexibilidade.</li>
                                        <li><i class="far fa-check-circle"></i>Redução do Estresse e Ansiedade.</li>
                                        <li><i class="far fa-check-circle"></i>Melhoria da Postura e Consciência Corporal.</li>
                                        <li><i class="far fa-check-circle"></i>Aumento da Energia e Vitalidade.</li>
                                        <li><i class="far fa-check-circle"></i>Melhoria na Qualidade do Sono.</li>
                                    </ul>
                                </div>

                                <div class="accordion-area mb-30 accordion" id="faqAccordion">

                                    <div class="accordion-card style2 active">
                                        <div class="accordion-header" id="collapse-item-1">
                                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">O Yoga é apenas uma forma de exercício físico ou envolve aspectos mentais e espirituais?</button>
                                        </div>
                                        <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">O Yoga vai além de ser apenas uma forma de exercício físico. Embora as posturas (asanas) promovam força, flexibilidade e equilíbrio, o Yoga também incorpora técnicas de respiração (pranayama), meditação e princípios éticos. Esses elementos visam cultivar não apenas o bem-estar físico, mas também a paz mental, a consciência espiritual e o equilíbrio emocional.</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="collapse-item-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">Qual é a diferença entre os estilos de Yoga, como Hatha, Vinyasa e Yin?</button>
                                        </div>
                                        <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Os diferentes estilos de Yoga oferecem abordagens distintas para a prática. O Hatha Yoga é geralmente considerado um estilo mais suave, focando nas posturas fundamentais e na respiração. O Vinyasa Yoga é caracterizado por movimentos fluidos sincronizados com a respiração, promovendo um fluxo contínuo entre as posturas. O Yin Yoga, por outro lado, envolve posturas mais passivas realizadas por períodos prolongados, visando o relaxamento profundo e a flexibilidade.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="collapse-item-3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">Quais são os benefícios do Yoga para a saúde mental?</button>
                                        </div>
                                        <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">O Yoga oferece vários benefícios para a saúde mental. A prática de técnicas de respiração controlada e meditação pode reduzir o estresse, a ansiedade e melhorar o humor. Além disso, a atenção plena cultivada durante a prática do Yoga pode aumentar a consciência do momento presente, promovendo uma mente mais calma e equilibrada. Estudos também sugerem que o Yoga pode auxiliar na melhoria da qualidade do sono e na redução de sintomas relacionados à depressão.</p>
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
                                        <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Zumba</a>
                                    </li>
                                    <li>
                                        <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Box</a>
                                    </li>
                                    <li>
                                        <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Artes Marciais</a>
                                    </li>
                                    <li>
                                        <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Judô</a>
                                    </li>
                                    <li>
                                        <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Musculação..</a>
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
        <section class="cta-area space" data-bg-src={{ asset('assets/img/bg/contato-yoga1.png') }}>
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


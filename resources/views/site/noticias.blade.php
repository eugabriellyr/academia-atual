@extends('layout.layout')
{{-- Esse conteudo sendo uma extensão da página layout --}}


@section('title','Noticias')

@section('conteudo')
{{-- Tudo que terá na página de Noticias --}}

<!--==============================
    BANNER DE NOTICIAS
    ============================== -->
    <img src="assets/img/about/fundoheader.png" class="img-fluid">

    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/banner-noti.png">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Our Blogs</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">HOME</a></li>
                            <li class="active">BLOG PAGE</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>


 <!--==============================
    AREA DE NOTICIAS/BLOG
    ==============================-->
    <section class="blog-area space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="assets/img/blog/noti7.png" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">SETEMBRO 15, 2023</a>
                                <a href="blog.html">SHOPPING</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Dominando as máquinas: um guia para iniciantes para equipamentos de ginástica</a></h3>
                            <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> READ MORE</a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="assets/img/blog/noti8.png" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">SETEMBRO 27, 2023</a>
                                <a href="blog.html">SHOPPING</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Dominando a academia: estratégias essenciais para maximizar seus treinos</a></h3>
                            <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> READ MORE</a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="assets/img/blog/noti4.png" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">OUTUBRO 09, 2023</a>
                                <a href="blog.html">SHOPPING</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Quebrando a barreira do suor: aceite o desafio do condicionamento físico na VivaBem</a></h3>
                            <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> READ MORE</a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="assets/img/blog/noti1.png" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">OUTUBRO 25, 2023</a>
                                <a href="blog.html">SHOPPING</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Abasteça sua jornada de condicionamento físico: dicas e conselhos nutricionais para frequentadores de academia</a></h3>
                            <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> READ MORE</a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="assets/img/blog/noti3.png" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">NOBEMBRO 03, 2023</a>
                                <a href="blog.html">SHOPPING</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Liberte o seu atleta interior: descubra o seu verdadeiro potencial na VivaBem</a></h3>
                            <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> READ MORE</a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="assets/img/blog/noti2.png" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">NOVEMBRO 22, 2023</a>
                                <a href="blog.html">SHOPPING</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Abasteça sua jornada de condicionamento físico: dicas e conselhos nutricionais para frequentadores de academia</a></h3>
                            <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> READ MORE</a>
                        </div>
                    </div>
                    <div class="pagination">
                        <ul>
                            <li><a href="blog.html">1</a></li>
                            <li><a href="blog.html">2</a></li>
                            <li><a href="blog.html">3</a></li>
                            <li><a href="blog.html"><i class="fas fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <form class="search-form">
                                <input type="text" placeholder="Insira a palavra-chave">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>

                        <div class="widget">
                            <h3 class="widget_title">Posts Recentes</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/notii1.png" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Estratégias essenciais para maximizar seu treino</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html">SETEMBRO 15, 2023</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/notii2.png" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Treinamento funcional em sua rotina...</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html">SETEMBRO 27, 2023</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/noti-comida.png" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Dicas de nutrição para frequentadores de academias</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html">OUTUBRO 09, 2023</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget_categories">
                            <h3 class="widget_title">Categorias</h3>
                            <ul>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Aula de Yoga</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Treinamento de Box</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Aula de Musculação</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>CrossFit</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i> Aula de Dança </a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget_gallery">
                            <h3 class="widget_title">Galeria de Projetos</h3>
                            <div class="insta-feed">
                                <a href="blog.html"><img src="assets/img/widget/widget1-1.png" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="assets/img/widget/widget1-2.png" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="assets/img/widget/widget1-3.png" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="assets/img/widget/widget1-4.png" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="assets/img/widget/widget1-5.png" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="assets/img/widget/widget1-6.png" alt="img">
                                    <i class="fab fa-instagram"></i></a>
                            </div>
                        </div>

                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Tags Populares</h3>
                            <div class="tagcloud">
                                <a href="blog.html">DICAS</a>
                                <a href="blog.html">FIT</a>
                                <a href="blog.html">AJUDA</a>
                                <a href="blog.html">FAMÍLIA</a>
                                <a href="blog.html">VIVABEM</a>
                                <a href="blog.html">EXERCÍCIOS</a>
                                <a href="blog.html">FITNESS</a>
                                <a href="blog.html">ACADEMIA</a>
                                <a href="blog.html">SAÚDE</a>
                                <a href="blog.html">SOLUÇÃO</a>
                                <a href="blog.html">TREINAMENTO</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection

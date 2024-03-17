@extends('layout.layout')
{{-- Esse conteudo sendo uma extensão da página layout --}}


@section('title','Contato')

@section('conteudo')
{{-- Tudo que terá na página Contato --}}


<!--==============================
    BANNER DE CONTATO
    ============================== -->

    <img src="assets/img/about/fundoheader.png" class="img-fluid">

    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/banner-c1.png">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Contate-nos</h1>
                        <ul class="breadcumb-menu">
                            <li><a href={{ route('home') }}>HOME</a></li>
                            <li class="active">Contate-nos</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
        AREA CONTATO
    ==============================-->
    <div class="contact-area space bg-smoke2">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <img src="assets/img/icon/contact-icon1-1.svg" alt="icon">
                        </div>
                        <div class="media-body">
                            <span class="contact-info_title">ligue para nós 24/7</span>
                            <h6 class="contact-info_text"><a href="tel:9288006780">+584 (25) 21453</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <img src="assets/img/icon/contact-icon2-2.svg" alt="icon">
                        </div>
                        <div class="media-body">
                            <span class="contact-info_title">Marque uma visita</span>
                            <h6 class="contact-info_text"><a href="mailto:info@Fitmas.com">info@vivabem.com</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info bloco-c">
                        <div class="contact-info_icon">
                            <img src="assets/img/icon/contact-icon3-3.svg" alt="icon">
                        </div>
                        <div class="media-body">
                            <span class="contact-info_title ">Localização para contato</span>
                            <h6 class="contact-info_text "><a href="tel:9288006780"> Senac São Miguel Paulista</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map-sec2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2s!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="container">
        <div class="contact-form-area space-bottom">
            <div class="row g-0">
                <div class="col-lg-4">
                    <div class="contact-form-thumb">
                        <img src="assets/img/normal/contact1-1.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-8 bg-smoke2">
                    <div class="contact-form-wrap">
                        <div class="title-area">
                            <span class="sub-title">Contate-nos
                            </span>
                            <h2 class="sec-title">Envie uma Mensagem</h2>
                        </div>
                        <form action="{{ route('contato.enviar') }}" method="POST" class="contact-form" id="formContato">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="nomeContato" id="nomeContato" placeholder="Seu Nome" value="{{ old('nomeContato') }}">
                                        <i class="far fa-user"></i>
                                        <div id="nomeContatoError" class="nomeContatoError"></div>
                                        {{-- @error('nomeContato')
                                        <div class="error">{{ $message }}</div>
                                        @enderror --}}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="emailContato" id="emailContato" placeholder="Endereço de Email" value="{{ old('emailContato') }}">
                                        <i class="far fa-envelope"></i>
                                        <div id="emailContatoError" class="emailContatoError"></div>
                                        {{-- @error('emailContato')
                                        <div class="error">{{ $message }}</div>
                                        @enderror --}}
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="foneContato" id="foneContato" placeholder="Seu Telefone" value="{{ old('foneContato') }}">
                                        <i class="far fa-user"></i>
                                        <div id="foneContatoError" class="foneContatoError"></div>
                                        {{-- @error('foneContato')
                                        <div class="error">{{ $message }}</div>
                                        @enderror --}}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select name="subject" id="assuntoContato" class="form-select style-white">
                                            <option value="{{ old('assuntoContato') }}" disabled="" selected="" hidden="">Selecione o assunto</option>
                                            <option value="Matriculas">Matrículas</option>
                                            <option value="Aulas">Aulas</option>
                                            <option value="instrutores">Instrutores</option>
                                            <option value="problemas">Problemas</option>
                                        </select>
                                        <div id="assuntoContatoError" class="assuntoContatoError"></div>
                                        {{-- @error('assuntoContato')
                                                <div class="error">{{ $message }}</div>
                                                @enderror --}}
                                    </div>
                                </div>
                            </div>
{{--
                            <div class="ajustes-div">
                                <div class="col-lg-6 ">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="foneContato" id="foneContato" placeholder="Telefone" value="{{ old('emailContato') }}">
                                        <i class="far fa-envelope"></i>
                                        @error('foneContato')
                                        <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class=" ajustes-form" >
                                        <select name="subject" id="assuntoContato" class="form-select style-white">
                                            <option value="{{ old('assuntoContato') }}" disabled="" selected="" hidden="">Selecione o assunto</option>
                                            <option value="Matriculas">Matrículas</option>
                                            <option value="Aulas">Aulas</option>
                                            <option value="instrutores">Instrutores</option>
                                            <option value="problemas">Problemas</option>
                                        </select>
                                        @error('assuntoContato')
                                                <div class="error">{{ $message }}</div>
                                                @enderror
                                    </div>


                                </div>
                            </div> --}}

                            <div class="form-group col-12">
                                <textarea placeholder="Digite sua Mensagem" id="msgContato" class="form-control style-white" name="msgContato">{{ old('msgContato') }}</textarea>
                            </div>

                            <div class="form-btn col-12">
                                <button class="btn" type="submit" onclick="formContato(event)">Enviar Mensagem</button>
                                <div id="contatoMensagem" class="contatoMensagem"></div>
                                <style>
                                    .contatoMensagem{
                                        color: brown
                                    }
                                </style>
                                {{-- mudar pra mensagemContato --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space-bottom">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Siga-nos
                </span>
                <h2 class="sec-title title-c">Feed Instagram </h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta1.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta1.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta2.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta2.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta3.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta3.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta4.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta4.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta5.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta5.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta6.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta6.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta7.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta7.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta8.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta8.png" alt="portfolio">
                    </div>
                </div>
            </div>
        </div>
    </div>


 @endsection

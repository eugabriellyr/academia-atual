<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{ asset('dash/images/favicon.ico') }}" type="image/ico" />

    <title> @yield('title') - Academia Viva Bem</title>

<!-- Bootstrap -->
<link href="{{ asset('dash/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{ asset('dash/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<!-- NProgress -->
<link href="{{ asset('dash/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
<!-- iCheck -->
<link href="{{ asset('dash/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

<!-- bootstrap-progressbar -->
<link href="{{ asset('dash/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
<!-- JQVMap -->
<link href="{{ asset('dash/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
<!-- bootstrap-daterangepicker -->
<link href="{{ asset('dash/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="{{ asset('dash/build/css/custom.min.css') }}" rel="stylesheet">

<link href="{{ asset('dash/dash.css') }}" rel="stylesheet">


</head>

<style>
    .left_col {
        /* position: fixed */
    }
    section{
        background: #2A3F54
    }
</style>

<body class="nav-md" style="background: #fff">

    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                {{-- ALUNO --}}
                @if (session('tipoUsuario') == 'aluno')
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.html" class="site_title"><i class="fa fa-paw"></i>
                                <span>Aluno (a)</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="../dash/images/img.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2>{{ $aluno->nomeAluno }}</h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>Geral</h3>
                                <ul class="nav side-menu">
                                    <li><a href="{{ route('dashboard.aluno.perfil.perfill') }}"><i class="fa fa-home"></i> Perfil <span
                                                class="fa fa-chevron-down"></span></a>
                                        {{-- <ul class="nav child_menu">
                                    <li><a href="{{ route('admin.func.index') }}">Sub para teste</a></li>
                                </ul> --}}
                                    </li>
                                    <li><a href="#"><i class="fa fa-edit"></i>
                                            Meus Treinos <span class="fa fa-chevron-down"></span></a>
                                        {{-- <ul class="nav child_menu">
                                    <li><a href="form.html">Sub para teste</a></li>
                                </ul> --}}
                                    </li>

                                    <li><a><i class="fa fa-table"></i> Agendamentos <span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="tables.html">Sub para teste</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-bar-chart-o"></i> Progesso <span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="chartjs.html">Sub para teste</a></li>

                                        </ul>

                                    </li>
                                    <li><a><i class="fa fa-clone"></i>Pagamentos <span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="fixed_sidebar.htmlF">Sub para teste</a></li>
                                        </ul>
                                    </li>

                                    <li><a><i class="fa fa-clone"></i>Horários <span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="fixed_sidebar.htmlF">Sub para teste</a></li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>
                            <div class="menu_section">
                                {{-- <h3>Live On</h3> --}}
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-windows"></i>Extra<span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="#">Exemplo</a></li>
                                            <li><a href="#">Cad Funcionários</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>

                        </div>
                        <!-- /sidebar menu -->
                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a href="{{ route('sair') }}" data-toggle="tooltip" data-placement="top" title="Logout"
                                href="login.html">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="../dash/images/img.jpg" alt="">{{ $aluno->nomeAluno }}
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <img src="../dash/images/img.jpg" alt="">{{ $aluno->nomeAluno }}
                                    <a class="dropdown-item" href="javascript:;"> teste</a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">Help</a>
                                    <a class="dropdown-item" href="login.html"><i
                                            class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </div>
                            </li>

                            <li role="presentation" class="nav-item dropdown open">
                                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul class="dropdown-menu list-unstyled msg_list" role="menu"
                                    aria-labelledby="navbarDropdown1">
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="../dash/images/img.jpg"
                                                    alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="../dash/images/img.jpg"
                                                    alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="../dash/images/img.jpg"
                                                    alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="../dash/images/img.jpg"
                                                    alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="text-center">
                                            <a class="dropdown-item">
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            {{-- FIM MENU ALUNO --}}


            {{-- GERENTE --}}
        @elseif(session('tipoUsuario') == 'administrativo' && session('cargoFuncionario') == 'gerente')
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i>
                        <span>Administrador (a)</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="../dash/images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{ $usuario->nomeFuncionario }}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->
                <br />
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Geral</h3>
                        <ul class="nav side-menu">
                            <li><a href="#"><i class="fa fa-home"></i> Perfil <span
                                        class="fa fa-chevron-down"></span></a>
                                {{-- <ul class="nav child_menu">
                                    <li><a href="{{ route('admin.func.index') }}">Sub para teste</a></li>
                                </ul> --}}
                            </li>
                            <li><a href="{{ route('dashboard.adm.alunos.index') }}"><i class="fa fa-edit"></i>
                                    Alunos <span class="fa fa-chevron-down"></span></a>
                                {{-- <ul class="nav child_menu">
                                    <li><a href="form.html">Sub para teste</a></li>
                                </ul> --}}
                            </li>

                            <li><a><i class="fa fa-table"></i> Treinos <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="tables.html">Sub para teste</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-bar-chart-o"></i> Cronograma <span
                                        class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="chartjs.html">Sub para teste</a></li>

                                </ul>

                            </li>
                            <li><a><i class="fa fa-clone"></i>Serviços <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="fixed_sidebar.htmlF">Sub para teste</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <div class="menu_section">
                        {{-- <h3>Live On</h3> --}}
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-windows"></i>Extra<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ route('dashboard.adm.alunos.index') }}">Cad Alunos</a></li>
                                    <li><a href="page_404.html">Cad Funcionários</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->
                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a href="{{ route('sair') }}" data-toggle="tooltip" data-placement="top" title="Logout"
                        href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                    <ul class=" navbar-right">
                        <li class="nav-item dropdown open" style="padding-left: 15px;">
                            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                <img src="../dash/images/img.jpg" alt="">{{ $funcionario->nomeFuncionario }}
                            </a>
                            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                <img src="../dash/images/img.jpg" alt="">{{ $funcionario->nomeFuncionario }}
                                <a class="dropdown-item" href="javascript:;"> teste</a>
                                <a class="dropdown-item" href="javascript:;">
                                    <span class="badge bg-red pull-right">50%</span>
                                    <span>Settings</span>
                                </a>
                                <a class="dropdown-item" href="javascript:;">Help</a>
                                <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i>
                                    Log Out</a>
                            </div>
                        </li>

                        <li role="presentation" class="nav-item dropdown open">
                            <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1"
                                data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul class="dropdown-menu list-unstyled msg_list" role="menu"
                                aria-labelledby="navbarDropdown1">
                                <li class="nav-item">
                                    <a class="dropdown-item">
                                        <span class="image"><img src="../dash/images/img.jpg"
                                                alt="Profile Image" /></span>
                                        <span>
                                            <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                        </span>
                                        <span class="message">
                                            Film festivals used to be do-or-die moments for movie makers. They were
                                            where...
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item">
                                        <span class="image"><img src="../dash/images/img.jpg"
                                                alt="Profile Image" /></span>
                                        <span>
                                            <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                        </span>
                                        <span class="message">
                                            Film festivals used to be do-or-die moments for movie makers. They were
                                            where...
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item">
                                        <span class="image"><img src="../dash/images/img.jpg"
                                                alt="Profile Image" /></span>
                                        <span>
                                            <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                        </span>
                                        <span class="message">
                                            Film festivals used to be do-or-die moments for movie makers. They were
                                            where...
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item">
                                        <span class="image"><img src="../dash/images/img.jpg"
                                                alt="Profile Image" /></span>
                                        <span>
                                            <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                        </span>
                                        <span class="message">
                                            Film festivals used to be do-or-die moments for movie makers. They were
                                            where...
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <div class="text-center">
                                        <a class="dropdown-item">
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        {{-- FIM GERENTE --}}


        {{-- INSTRUTOR --}}
    @elseif(session('tipoUsuario') == 'instrutores')
        <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="index.html" class="site_title"><i class="fa fa-paw"></i>
                    <span>Instrutor (a)</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
                <div class="profile_pic">
                    <img src="../dash/images/img.jpg" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                    <span>Welcome,</span>
                    <h2>{{ $funcionario->nomeFuncionario }}</h2>
                </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>Geral</h3>
                    <ul class="nav side-menu">
                        <li><a href="#"><i class="fa fa-home"></i> Perfil <span
                                    class="fa fa-chevron-down"></span></a>
                            {{-- <ul class="nav child_menu">
                                    <li><a href="{{ route('admin.func.index') }}">Sub para teste</a></li>
                                </ul> --}}
                        </li>
                        <li><a href="{{ route('dashboard.adm.alunos.index') }}"><i class="fa fa-edit"></i>
                                Alunos <span class="fa fa-chevron-down"></span></a>
                            {{-- <ul class="nav child_menu">
                                    <li><a href="form.html">Sub para teste</a></li>
                                </ul> --}}
                        </li>

                        <li><a><i class="fa fa-bar-chart-o"></i> Treinos <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="chartjs.html">Sub para teste</a></li>

                            </ul>

                        </li>
                        <li><a><i class="fa fa-clone"></i>Cronograma <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="fixed_sidebar.htmlF">Sub para teste</a></li>
                            </ul>
                        </li>


                        <li><a><i class="fa fa-clone"></i>Histórico <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="fixed_sidebar.htmlF">Sub para teste</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <div class="menu_section">
                    {{-- <h3>Live On</h3> --}}
                    <ul class="nav side-menu">
                        <li><a><i class="fa fa-windows"></i>Extra<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{ route('dashboard.adm.alunos.index') }}">Extra</a></li>
                                <li><a href="page_404.html">Cad Funcionários</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>

            </div>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
                <a data-toggle="tooltip" data-placement="top" title="Settings">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Lock">
                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                </a>
                <a href="{{ route('sair') }}" data-toggle="tooltip" data-placement="top" title="Logout"
                    href="login.html">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
            </div>
            <!-- /menu footer buttons -->
        </div>
    </div>
    <!-- top navigation -->
    <div class="top_nav">
        <div class="nav_menu">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                    <li class="nav-item dropdown open" style="padding-left: 15px;">
                        <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                            id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                            <img src="../dash/images/img.jpg" alt="">{{ $funcionario->nomeFuncionario }}
                        </a>
                        <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                            <img src="../dash/images/img.jpg" alt="">{{ $funcionario->nomeFuncionario }}
                            <a class="dropdown-item" href="javascript:;"> teste</a>
                            <a class="dropdown-item" href="javascript:;">
                                <span class="badge bg-red pull-right">50%</span>
                                <span>Settings</span>
                            </a>
                            <a class="dropdown-item" href="javascript:;">Help</a>
                            <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i>
                                Log Out</a>
                        </div>
                    </li>

                    <li role="presentation" class="nav-item dropdown open">
                        <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1"
                            data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-green">6</span>
                        </a>
                        <ul class="dropdown-menu list-unstyled msg_list" role="menu"
                            aria-labelledby="navbarDropdown1">
                            <li class="nav-item">
                                <a class="dropdown-item">
                                    <span class="image"><img src="../dash/images/img.jpg"
                                            alt="Profile Image" /></span>
                                    <span>
                                        <span>John Smith</span>
                                        <span class="time">3 mins ago</span>
                                    </span>
                                    <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were
                                        where...
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item">
                                    <span class="image"><img src="../dash/images/img.jpg"
                                            alt="Profile Image" /></span>
                                    <span>
                                        <span>John Smith</span>
                                        <span class="time">3 mins ago</span>
                                    </span>
                                    <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were
                                        where...
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item">
                                    <span class="image"><img src="../dash/images/img.jpg"
                                            alt="Profile Image" /></span>
                                    <span>
                                        <span>John Smith</span>
                                        <span class="time">3 mins ago</span>
                                    </span>
                                    <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were
                                        where...
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item">
                                    <span class="image"><img src="../dash/images/img.jpg"
                                            alt="Profile Image" /></span>
                                    <span>
                                        <span>John Smith</span>
                                        <span class="time">3 mins ago</span>
                                    </span>
                                    <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were
                                        where...
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <div class="text-center">
                                    <a class="dropdown-item">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    {{-- FIM INSTRUTOR --}}


    {{-- ADMINISTRADOR --}}
@elseif (session('tipoUsuario') == 'administrativo' && session('cargoFuncionario') == 'administrador')
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i>
                <span>Administrador (a)</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="../dash/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ $funcionario->nomeFuncionario }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Geral</h3>
                <ul class="nav side-menu">
                    <li><a href="#"><i class="fa fa-home"></i> Perfil <span
                                class="fa fa-chevron-down"></span></a>
                        {{-- <ul class="nav child_menu">
                                        <li><a href="{{ route('admin.func.index') }}">Sub para teste</a></li>
                                    </ul> --}}
                    </li>
                    <li><a href="#"><i class="fa fa-edit"></i>
                            Alunos <span class="fa fa-chevron-down"></span></a>
                        {{-- <ul class="nav child_menu">
                                        <li><a href="form.html">Sub para teste</a></li>
                                    </ul> --}}
                    </li>

                    <li><a href="{{ route('dashboard.adm.func.index') }}"><i class="fa fa-table"></i> Funcionários <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            {{-- <li><a href="{{ route('dashboard.adm.func.index') }}">Sub para teste</a></li> --}}
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Treinos <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="chartjs.html">Sub para teste</a></li>

                        </ul>

                    </li>
                    <li><a><i class="fa fa-clone"></i>Cronograma <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="fixed_sidebar.htmlF">Sub para teste</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-clone"></i>Pagamentos <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="fixed_sidebar.htmlF">Sub para teste</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-clone"></i>Histórico <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="fixed_sidebar.htmlF">Sub para teste</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-clone"></i>Pendências <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="fixed_sidebar.htmlF">Sub para teste</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
            <div class="menu_section">
                {{-- <h3>Live On</h3> --}}
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-windows"></i>Cadastro<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('dashboard.adm.func.index') }}">Cad Alunos</a></li>
                            <li><a href="{{ route('dashboard.adm.func.create') }}">Cad Funcionários</a></li>
                        </ul>
                    </li>

                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->
        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a href="{{ route('sair') }}" data-toggle="tooltip" data-placement="top" title="Logout"
                href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
    </div>
    <!-- top navigation -->
    <div class="top_nav">
        <div class="nav_menu">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                    <li class="nav-item dropdown open" style="padding-left: 15px;">
                        <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                            id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                            <img src="../dash/images/img.jpg" alt="">{{ $funcionario->nomeFuncionario }}
                        </a>
                        <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                            <img src="../dash/images/img.jpg" alt="">{{ $funcionario->nomeFuncionario }}
                            <a class="dropdown-item" href="javascript:;"> teste</a>
                            <a class="dropdown-item" href="javascript:;">
                                <span class="badge bg-red pull-right">50%</span>
                                <span>Settings</span>
                            </a>
                            <a class="dropdown-item" href="javascript:;">Help</a>
                            <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i>
                                Log Out</a>
                        </div>
                    </li>

                    <li role="presentation" class="nav-item dropdown open">
                        <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1"
                            data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-green">6</span>
                        </a>
                        <ul class="dropdown-menu list-unstyled msg_list" role="menu"
                            aria-labelledby="navbarDropdown1">
                            <li class="nav-item">
                                <a class="dropdown-item">
                                    <span class="image"><img src="../dash/images/img.jpg"
                                            alt="Profile Image" /></span>
                                    <span>
                                        <span>John Smith</span>
                                        <span class="time">3 mins ago</span>
                                    </span>
                                    <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were
                                        where...
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item">
                                    <span class="image"><img src="../dash/images/img.jpg"
                                            alt="Profile Image" /></span>
                                    <span>
                                        <span>John Smith</span>
                                        <span class="time">3 mins ago</span>
                                    </span>
                                    <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were
                                        where...
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item">
                                    <span class="image"><img src="../dash/images/img.jpg"
                                            alt="Profile Image" /></span>
                                    <span>
                                        <span>John Smith</span>
                                        <span class="time">3 mins ago</span>
                                    </span>
                                    <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were
                                        where...
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item">
                                    <span class="image"><img src="../dash/images/img.jpg"
                                            alt="Profile Image" /></span>
                                    <span>
                                        <span>John Smith</span>
                                        <span class="time">3 mins ago</span>
                                    </span>
                                    <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were
                                        where...
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <div class="text-center">
                                    <a class="dropdown-item">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    {{-- FIM ADMINISTRADOR --}}
    @endif

    <style>
        .body{
            background: #fff
        }
    </style>

    <section class="">
        @yield('conteudo-dash')
    </section>
    <!-- footer content -->
    {{-- <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer> --}}
    <!-- /footer content -->
    </div>
    </div>

   <!-- jQuery -->
   <script src="{{ asset('dash/vendors/jquery/dist/jquery.min.js') }}"></script>
   <!-- Bootstrap -->
   <script src="{{ asset('dash/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
   <!-- FastClick -->
   <script src="{{ asset('dash/vendors/fastclick/lib/fastclick.js') }}"></script>
   <!-- NProgress -->
   <script src="{{ asset('dash/vendors/nprogress/nprogress.js') }}"></script>
   <!-- Chart.js -->
   <script src="{{ asset('dash/vendors/Chart.js/dist/Chart.min.js') }}"></script>
   <!-- gauge.js -->
   <script src="{{ asset('dash/vendors/gauge.js/dist/gauge.min.js') }}"></script>
   <!-- bootstrap-progressbar -->
   <script src="{{ asset('dash/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
   <!-- iCheck -->
   <script src="{{ asset('dash/vendors/iCheck/icheck.min.js') }}"></script>
   <!-- Skycons -->
   <script src="{{ asset('dash/vendors/skycons/skycons.js') }}"></script>
   <!-- Flot -->
   <script src="{{ asset('dash/vendors/Flot/jquery.flot.js') }}"></script>
   <script src="{{ asset('dash/vendors/Flot/jquery.flot.pie.js') }}"></script>
   <script src="{{ asset('dash/vendors/Flot/jquery.flot.time.js') }}"></script>
   <script src="{{ asset('dash/vendors/Flot/jquery.flot.stack.js') }}"></script>
   <script src="{{ asset('dash/vendors/Flot/jquery.flot.resize.js') }}"></script>
   <!-- Flot plugins -->
   <script src="{{ asset('dash/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
   <script src="{{ asset('dash/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
   <script src="{{ asset('dash/vendors/flot.curvedlines/curvedLines.js') }}"></script>
   <!-- DateJS -->
   <script src="{{ asset('dash/vendors/DateJS/build/date.js') }}"></script>
   <!-- JQVMap -->
   <script src="{{ asset('dash/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
   <script src="{{ asset('dash/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
   <script src="{{ asset('dash/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
   <!-- bootstrap-daterangepicker -->
   <script src="{{ asset('dash/vendors/moment/min/moment.min.js') }}"></script>
   <script src="{{ asset('dash/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

   <!-- Custom Theme Scripts -->
   <script src="{{ asset('dash/build/js/custom.min.js') }}"></script>

</body>

</html>

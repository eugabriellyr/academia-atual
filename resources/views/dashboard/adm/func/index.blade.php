@extends('layout-dash.layout-dash')
{{-- Esse conteudo sendo uma extensão da página layout-dash --}}

@section('title', 'Administrador')

@section('conteudo-dash')
    {{-- Tudo que terá na página de cadastro --}}

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Funcionários <small></small></h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
                <div class="col-md-6 col-sm-6  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Lista Funcionários <small> - editar/desativar</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Telefone</th>
                                        <th>Cargo</th>
                                        <th>Editar</th>
                                        <th>Desativar</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($listaFunc as $funcionario)
                                        <tr>
                                            <td>{{ $funcionario->idFuncionario }}</td>
                                            <td>{{ $funcionario->nomeFuncionario }}</td>
                                            <td>{{ $funcionario->emailFuncionario }}</td>
                                            <td>{{ $funcionario->foneFuncionario }}</td>
                                            <td>{{ $funcionario->cargoFuncionario }}</td>
                                            <td>
                                                <a href="{{ route('dashboard.adm.func.edit', $funcionario->idFuncionario) }}"
                                                    class="btn btn-primary">Editar</a></td>
                                            <td>
                                                <form
                                                action="{{ route('dashboard.adm.func.outdated', $funcionario->idFuncionario) }}"
                                                    method="POST" style="display: inline">
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                                </form>
                                            </td>
                                            {{-- <td>@mdo</td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

            </div>
        </div>
    </div>
    <!-- /page content -->




@endsection

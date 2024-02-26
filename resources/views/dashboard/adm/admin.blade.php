@extends('layout-dash.layout-dash')
{{-- Esse conteudo sendo uma extensão da página layout-dash --}}

@section('title','Administrador')

@section('conteudo-dash')
{{-- Tudo que terá no dash --}}
 <h1>{{ $funcionario->nomeFuncionario }}</h1>
@endsection


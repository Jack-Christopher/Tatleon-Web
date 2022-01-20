@extends('layouts.services')

@section('title')
    Inicio
@endsection

@section('scripts')
@endsection

@section('styles')
    <link rel="stylesheet" href="{!! asset('css/welcome.css') !!}">
@endsection

@section('content')

        <div class="container" align="center" style="padding:2%;">
            <img src="{!! asset('img/unsa_logo.png') !!}" alt="UNSA Logo" id="logo">
        </div>

        @auth
        <br>
        <div class="container" align="center">
            <h3 class="display-5" > Bienvenido(a) {{ Auth::user()->first_name }}</h3>
        </div>
        @endauth

        <div class="container" align="center">
            <br>

            <div class="container" id="button_box">
                <br><br>
                <div class="container" align="center">
                    <a href="services/link_repository" class="btn btn-primary"> Repositorio de Enlaces</a>
                    <a href="services/teacher_record" class="btn btn-danger"> Registro de Docentes</a>
                    <a href="services/shared_resources" class="btn btn-warning"> Recursos Compartidos</a>
                    <br>
                    <a href="services/external_help" class="btn btn-primary index_button"> Ayuda Externa </a>
                    <a href="#" class="btn btn-danger index_button"> Coming soon... </a>
                    <a href="#" class="btn btn-warning index_button"> Coming soon... </a>
                    <br>
                    <a href="#" class="btn btn-primary index_button"> Coming soon... </a>
                    <a href="#" class="btn btn-danger index_button"> Coming soon... </a>
                    <a href="#" class="btn btn-warning index_button"> Coming soon... </a>
                </div>
                <br><br>

        </div>
    <br><br>

    <div class="container" style="display: block;">
        Made by
        <img src="{!! asset('img/equipo_logo.jpg') !!}" alt="The Delta Team Logo" id="TDT_logo">
    </div>

    @endsection
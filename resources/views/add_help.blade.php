
@extends('layouts.dashboard')

@section('title', 'Agregar Ayuda Externa')

@section('back_url')
    <?php 
        $url = url()->current(); 
        $url = explode('/', $url);
        array_pop($url);
        $url = implode('/', $url);
        echo '<a href="' . $url . '">';
    ?>
@endsection

@section('content')

    <!-- form to register help -->
    <div class="container" align="left">
        <h5 class="display-5" > Registro de Solicitud/Oferta de Ayuda </h5>
        <br>
        <form method="POST" action="{{ route('add_help') }}">
            @csrf
            <div class="form-group">
            <p>¿Es una Solicitud o una Oferta? </p>
            <input type="radio" id="request" name="help_type" value="request" checked>
            <label for="request">Solicitud</label>
            <input type="radio" id="offer" name="help_type" value="offer">
            <label for="offer">Oferta</label>
            <br><br>
            <label for="help_description">Descripción: </label>
            <input type="text" class="form-control" id="help_description" name="help_description" placeholder="Descripción de la ayuda" value = "{{ old('help_description') }}">
            <label for="contact_method">Método de contacto: </label>
            <input type="text" class="form-control" id="contact_method" name="contact_method" placeholder="p.ej: email, telefono, Whatsapp, etc" value = "{{ old('contact_method') }}">
            <label for="contact_info">Información de contacto: </label>
            <input type="text" class="form-control" id="contact_info" name="contact_info" placeholder="Información de contacto" value = "{{ old('contact_info') }}">
            <label for="deadline">Fecha Limite: </label>
            <input type="date" class="form-control" id="deadline" name="deadline" value = "{{ old('deadline') }}">
            </div>
            <br>
            <div class="form-group" align="right">
                <button type="submit" class="btn btn-primary">Registrar Ayuda</button>
            </div>
            <br><br>

        </form>
    </div>

    <!-- message of link added successfully -->
    @if (session('success'))
        <div class="container" align="center">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif 


@endsection
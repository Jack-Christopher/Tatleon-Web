
@extends('layouts.dashboard')

@section('title', 'Editar Bienvenida')

@section('back_url')
    <?php 
        $url = url()->current(); 
        $url = explode('/', $url);
        array_pop($url);
        array_pop($url);
        array_pop($url);
        $url = implode('/', $url);
        echo '<a href="' . $url . '">';
    ?>
@endsection

@section('content')
<div class="container">
    @if(auth()->check()) 
        <div class="container" align="center">
            <h6 class="display-6" > Actualización de Bienvenida </h6>
            <br>
            <h3> {{ $school->name}} </h3>
        </div>
        <br>
        <form method="POST" action="{{ route('welcome_freshman_edit') }}">
            @csrf
            <div class="form-group">
                <input type="hidden" name="school_id" value="{{ $school->id }}">
                <label for="start_date">Día de inicio</label>
                <input type="text" class="form-control" id="start_date" name="start_date" placeholder="Día de inicio de clases" value="{{ $welcome->start_date }}">
                <label type="text" for="instructions">Instrucciones</label>
                <textarea class="form-control" id="instructions" name="instructions" placeholder="Instrucciones para el inicio de clases" rows="3">{{ $welcome->instructions }}</textarea>
                <label for="facebook_link">Enlace de Facebook</label>
                <input autocomplete="off" autofill="off" type="text" class="form-control" id="facebook_link" name="facebook_link" placeholder="Enlace a un grupo o página de Facebook" value="{{ $welcome->facebook_link }}">
                <label for="whatsapp_link">Enlace de WhatsApp</label>
                <input autocomplete="off" autofill="off" type="text" class="form-control" id="whatsapp_link" name="whatsapp_link" placeholder="Enlace a un grupo de WhatsApp" value="{{ $welcome->whatsapp_link }}">
                <label for="secret_key">Clave secreta</label>
                <input autocomplete="off" autofill="off" type="password" class="form-control" id="secret_key" name="secret_key" placeholder="Clave secreta para editar la información">
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <br><br>
        </form>

            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
        @endif
        </div>

@endsection
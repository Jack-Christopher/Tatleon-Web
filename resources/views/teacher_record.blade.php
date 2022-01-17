@extends('layouts.services')

@section('title')
    Registro de Docentes
@endsection

@section('scripts')
@endsection

@section('styles')
@endsection

@section('content')

<div class="container" align="center">
    <h6 class="display-6">Docentes Registrados</h6>
    <br>

    @forelse($data as $item)
        @if (! str_ends_with( $item['teacher']->email , "@unsa"))
        <div class="card" style="width: 64%;">
            {{$item['teacher']->email}}
            <h5 class="card-title">{{$item['teacher']->last_name}}, {{$item['teacher']->first_name}}</h5>
            <p class="card-text">{{$item['teacher']->description}} </p>

            <ul class="list-group list-group-flush">                
                @forelse($item['comments'] as $comment)
                    <li class="list-group-item"> {{$comment->comment}}  </li>
                @empty
                    <p class="card-text"> No hay comentarios para mostrar </p>
                @endforelse
            </ul>
            @auth 
                <a href="teacher_record/add_comment/{{$item['teacher']->id}}" class="btn btn-primary">Comentar</a> <br>           
            @endauth
        </div>
        <br>
        @endif
    @empty
        <p>No hay docentes registrados</p>
    @endforelse
    <hr>
    <br>
    <h6 class="display-6">Docentes sin registrar</h6>
    <br>
    @forelse($data as $item)
        @if (str_ends_with( $item['teacher']->email , "@unsa"))
        <div class="card" style="width: 64%;">
            <h5 class="card-title">{{$item['teacher']->last_name}}, {{$item['teacher']->first_name}}</h5>
            <p class="card-text">{{$item['teacher']->description}} </p>

            <ul class="list-group list-group-flush">                
                @forelse($item['comments'] as $comment)
                <li class="list-group-item">  {{$comment->comment}} </li>
                @empty
                    <p class="card-text"> No hay comentarios para mostrar </p>
                @endforelse
            </ul>
            @auth 
                <a href="teacher_record/add_comment/{{$item['teacher']->id}}" class="btn btn-primary">Comentar</a> <br>           
            @endauth
        </div>
        <br>
        @endif
    @empty
        <p>No hay docentes registrados</p>
    @endforelse

    <hr>

    @if(auth()->check()) 
        @if (auth()->user()->user_type > 0)
        <!-- form to register teacher -->
        <div class="container" align="center">
            <h6 class="display-6" > Registro de Docente </h6>
        </div>
        <br>
        <form method="POST" action="{{ route('add_teacher') }}">
            @csrf
            <div class="form-group">
                <label for="first_name">Nombre</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nombre" required>
                <label for="last_name">Apellido</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellido" required>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Registrar Docente</button>
            <br><br>
        </form>

            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        @endif
        

    @endif
</div>
    
@endsection
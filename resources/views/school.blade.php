@extends('layouts.services')

@section('title')
    {{$school->name}}
@endsection

@section('scripts')
@endsection

@section('styles')
@endsection

@section('content')
    <div class="container">
    <h1 class="display-3"> Enlaces de {{$school->name}} </h1>
    <br>

    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripción</th>
          <th scope="col">Enlace</th>
        </tr>

      </thead>
      <tbody>
        @forelse($links as $row) 
            <tr>
                <th scope="row">{{ $row['id'] }}</th>
                <td>{{ $row['name'] }}</td>
                <td>{{ $row['description'] }} </td>
                <td> <a href="{{ $row['url'] }}" target="_blank" class="btn btn-success"> Visitar</a> </td>
            </tr>
        @empty
            <tr>
               <td colspan="4"> Aún no hay enlaces disponibles</td>
            </tr>
        @endforelse
      </tbody>
    </table>

        @if ($status == "not_logged_in") 
            <div class="alert alert-warning alert-dismissible fade show" role="alert" align="center">
            <strong>¡Atención!</strong> Debes <a href="/login" class="alert-link">iniciar sesión</a> para poder agregar enlaces.
        @elseif ($status == "my_school")
            <?php $url = $_SERVER['REQUEST_URI'] . '/add_link'; ?>
            <div class="container" align="right">
                <a href="{{ $url }}" class="btn btn-success"> Agregar enlace </a>
            </div><br>
            <div class="alert alert-dark" role="alert" align="center">
                <h4> Puedes ingresar tus propios enlaces para aumentar la información ofrecida por la página </h4>
            </div>
        @elseif ($status == "not_my_school")
            <div class="alert alert-dark" role="alert" align="center">
                <h4> Solo puedes agregar enlaces a tus propias escuelas </h4>
            </div>
        @endif
  </div>

@endsection
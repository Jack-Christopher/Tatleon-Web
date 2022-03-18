@extends('layouts.services')

@section('title')
    Soporte
@endsection

@section('scripts')
@endsection

@section('styles')
@endsection

@section('content')

<div class="container jumbotron">
    <div class="alert alert-secondary" role="alert">
      <h1 class="display-5" align="center"> Equipo de Trabajo</h1>
      <h4>The Delta Team</h4>
      <p>
        Este proyecto fue desarrollado por los estudiantes miembros de "The Delta Team" de la carrera de Ciencias de la Computación
        de la Universidad Nacional de San Agustín, el cual se empezó en la segunda mitad del año 2021.
      </p>
    </div>

    <h2 align="center"> Medios de Contacto</h2>
    <br>

    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">Cargo</th>
          <th scope="col">Encargado(s)</th>
          <th scope="col">Correo Electrónico</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>Servicio Técnico</th>
          <td>Jack Christopher Huaihua Huayhua (Tatleon Web)</td>
          <td>tatleonweb@gmail.com</td>
        </tr>
        <tr>
          <th>Programador</th>
          <td>Jack Christopher Huaihua Huayhua</td>
          <td>jhuaihuah@unsa.edu.pe</td>
        </tr>
        <tr>
          <th>Diseñador</th>
          <td>Jack Christopher Huaihua Huayhua</td>
          <td>jhuaihuah@unsa.edu.pe</td>
        </tr>
        <tr>
          <th>QA</th>
          <td>Jack Christopher Huaihua Huayhua</td>
          <td>jhuaihuah@unsa.edu.pe</td>
        </tr>
      </tbody>
    </table>

    <br>
  </div>
  <br>
  <h1 class="display-5" align="center"> Contribución</h1>

    <br>
    <div class="container" align="center">
        ¿Deseas contribuir con el desarrollo de este proyecto?
        <br><br>
        <a href="contributing" class="btn btn-success btn-lg btn-block" role="button"> Ver más detalles</a>
    </div>
    <br><br>

@endsection
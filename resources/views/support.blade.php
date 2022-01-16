@extends('layouts.services')

@section('title')
    Servicios
@endsection

@section('scripts')
@endsection

@section('styles')
@endsection

@section('content')

<div class="container jumbotron">
    <h1 class="display-3"> Medios de Contacto</h1>
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
  </div>


@endsection
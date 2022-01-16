@extends('layouts.services')

@section('title')
    Servicios
@endsection

@section('scripts')
@endsection

@section('styles')
@endsection

@section('content')

<div class="container">
    <h1 class="display-3" align="center">Servicios</h1>
    <h5 align="center">
        [TODO: Update with current policies]
    </h5>
    <br>

    <div class="alert alert-success" role="alert">
      <h2> Repositorio de Enlaces</h2>
      <h5> Propósito: </h5>
      <p> Almacenar y poner a disposición enlaces de trabajos realizados por los estudiantes
        de la Universidad Nacional de San Agustín que han sido subidos a otras plataformas con el propósito de
        difundirlo entre los estudiantes de la UNSA y puedan tener una mayor cantidad de reacciones.</p>
      <h5> Funcionamiento: </h5>
      <p>
        Solo las personas que se hayan registrado en Tatleon Web podrán ingresar enlaces relativos a su escuela,
        los cuales serán almacenados en la plataforma.
        Cualquier persona, no es necesario que se haya registrado, podrá ver los enlaces almacenados en su totalidad.
        <br><br>
        No podrán subir enlaces a la Vista de una escuela:
      <ul>
        <li> Los que no se hayan registrado </li>
        <li> Los que no pertenezcan a esa escuela </li>
      </ul>
      </p>
    </div>

    <div class="alert alert-warning" role="alert">
      <h2> Registro de Docentes</h2>
      <h5> Propósito: </h5>
      <p> Almacenar y poner a disposición el "Registro" de los docentes, ésto es, una serie de datos importantes sobre 
          los docentes como su preparación profesional y además un conjunto de comentarios subidos por
        los delegados de los cursos que han sido dictados por estos docentes de la Universidad Nacional de San Agustín.
        </p>
      <h5> Funcionamiento: </h5>
      <p>
        Los docentes podrán subir los datos que quisieran hacer público de sí mismos.
        Solo los usuarios registrados como delegados o los docentes podrán agregar un docente a la plataforma
        y además podrán ingresar un comentario sobre los docentes que ya se encuentren en la plataforma.
        Antes de agregar a un docente se debe verificar si ya se encuentra en la plataforma.
        Antes de agregar un comentario el/la delegado(a) debe hacer un consenso con los estudiantes para tener comentarios adecuados y justos.
        El usuario podrá ver todos los comentarios almacenados en la plataforma.
        <br><br>
        No podrán subir comentarios sobre un docente:
      <ul>
        <li> Los que no se hayan registrado </li>
        <li> Los que no sean delegados </li>
      </ul>
      </p>
    </div>

    <div class="alert alert-danger" role="alert">
      <h2> Recursos Compartidos</h2>
      <h5> Propósito: </h5>
      <p> Almacenar y poner a disposición Recursos Académicos subidos por los estudiantes
        de la Universidad Nacional de San Agustín.
        Con el propósito de que los estudiantes que están en grados inferiores o en otras escuelas/facultades puedan 
        estudiar y/o practicar con anticipación y tener una educación más integral complementando con estos recursos
        los cursos que estén llevando.</p>
      </p>
      <h5> Funcionamiento: </h5>
      <p>
        La idea es que el /la delegado(a) del curso cree una carpeta pública en Google Drive con el nombre del curso y dentro de esta carpeta
        los estudiantes suban los recursos que se usen en el desarrollo del curso.
        Cualquier usuario podrá ver todos los recursos almacenados en la plataforma.
        <br><br>
        No podrán subir Recursos de un curso:
      <ul>
        <li> Los que no se hayan registrado </li>
        <li> Los que no sean delegados </li>
      </ul>
      </p>
    </div>

    <div class="alert alert-info" role="alert">
      <h2> Coming soon...</h2>
      <p> Pronto estaremos implementando nuevos servicios.</p>
      <br>
      <p> Puedes dejar tus sugerencias en el siguiente formulario.</p>
      <a href="https://forms.gle/ypVaTyf5dG8BZHtL6" target="_blank" class="btn btn-info">Ir a Formulario</a>
    </div>
    <br><br>
  </div>
</body>

</html>


@endsection
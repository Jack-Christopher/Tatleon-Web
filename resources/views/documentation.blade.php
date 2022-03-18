@extends('layouts.services')

@section('title')
    Documentación
@endsection

@section('scripts')
@endsection

@section('styles')
@endsection

@section('content')

<div class="container">
    <h1 class="display-5" align="center">Servicios</h1>
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
        <br>
        Cualquier persona (sin necesidad de registrarse), podrá ver los enlaces almacenados en su totalidad.
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
        los estudiantes que hayan llevado los cursos dictados por estos docentes de la Universidad Nacional de San Agustín.
        </p>
    <h5> Funcionamiento: </h5>
    <p>
        Los docentes podrán subir los datos que quisieran hacer público de sí mismos.
        Solo los usuarios registrados como estudiantes podrán ingresar un comentario sobre los docentes que ya 
        se encuentren en la plataforma.
        <br>
        <b> Se deben cumplir las siguientes reglas en la publicación de comentarios: </b>
        <ul>
            <li> No se permiten comentarios que no se fundamenten en la realidad. </li>
            <li> No se permiten comentarios que atenten contra la moral, la ética o la dignidad de los docentes. </li>
            <li> No se permiten comentarios que tengan contenido sexual, racista, violento, amenazante, degradante o datos personales. </li>
        </ul>
        
        El usuario podrá ver todos los comentarios almacenados en la plataforma.
        <br><br>
        No podrán subir comentarios sobre un docente:
    <ul>
        <li> Los que no se hayan registrado </li>
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
        La idea es que cualquier estudiante que esté llevando el curso cree una carpeta en Google Drive dentro de la cual
        suba recursos que considere útiles para el curso.
        Lo que debe subir a esta plataforma es el enlace de la carpeta en Google Drive.
        Cualquier usuario podrá ver todos los recursos almacenados en la plataforma.
        <br>
        <b> Se deben cumplir las siguientes reglas en la publicación de recursos: </b>
        <ul>
            <li> No se permiten recursos que infringan derechos de autor. </li>
            <li> No se permiten recursos que atenten contra la moral, la ética o la dignidad de los estudiantes. </li>
            <li> No se permiten recursos que tengan contenido sexual, racista, violento, amenazante, degradante o que contengan datos personales. </li>
        </ul>

        <br>
        No podrán subir Recursos de un curso:
    <ul>
        <li> Los que no se hayan registrado </li>
        <li> Los que no sean delegados </li>
    </ul>
    </p>
    </div>


    <div class="alert alert-secondary" role="alert">
    <h2> Ayuda Externa</h2>
    <h5> Propósito: </h5>
    <p> Almacenar y poner a disposición peticiones de ayuda académica de los estudiantes de la Universidad Nacional de San Agustín.
        Con el propósito de que algún estudiante que pueda ayudarlo academicamente se ponga en contacto con los estudiantes.
        </p>
    </p>
    <h5> Funcionamiento: </h5>
    <p>
        <h6> ¿Qué se entiende por Ayuda Académica? </h6>
        <p>
            Ayuda académica se entiende como la ayuda que un estudiante puede brindar a otro estudiante de la misma escuela o 
            de otra escuela para la realización de trabajos o proyectos, lecciones, orientación o en otras actividades 
            que pueden ser remuneradas previo acuerdo de los estudiantes.
        </p>
        La idea es que cualquier estudiante pueda solicitar ayuda académica publicamente para que algún estudiante que tenga la 
        posibilidad de ayudarlo pueda hacerlo.
        Cualquier usuario podrá ver todos las peticiones de ayuda registradas en la plataforma.
        <br>
        <b> Se deben cumplir las siguientes reglas en la publicación de peticiones de ayuda: </b>
        <ul>
            <li> No se permiten peticiones de ayuda que sean falsos o de broma. </li>
            <li> No se permiten peticiones de ayuda que atenten contra la moral, la ética o la dignidad de los estudiantes. </li>
            <li> No se permiten peticiones de ayuda que tengan contenido sexual, racista, violento, amenazante, degradante o que contengan datos personales. </li>
        </ul>

        <br>
        No podrán pedir Ayuda Académica:
    <ul>
        <li> Los que no se hayan registrado </li>
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

@endsection
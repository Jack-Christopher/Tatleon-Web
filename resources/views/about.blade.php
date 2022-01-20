@extends('layouts.services')

@section('title')
    Acerca
@endsection

@section('scripts')
@endsection

@section('styles')
@endsection

@section('content')

<div class="container">
    <br>
    <div class="alert alert-primary" role="alert">
      <h1 class="display-4" align="center">Acerca</h1>

      <h2>Tatleon</h2>
      <p>
        Tatleon es un sitio web que permite a los usuarios tanto estudiantes como docentes de la Universidad Nacional de San Agustín, 
        poder acceder a una serie de servicios muy útiles para un mejor desenvolvimiento en la Universidad, de poder crear 
        recursos y modificarlos.
        Además de extender este acceso en modo de solo lectura para cualquier persona que pueda acceder a la página.
      </p>
      <h2>Servicios</h2>
      <p>
        Tatleon ofrece sus servicios de forma gratuita para que los estudiantes y docentes de la Universidad Nacional de San Agustín
        y cualquier otra persona puedan acceder a ellas libremente y puedan aportar tanto en cuanto puedan con este proyecto.
      </p>
    </div>

    <br>
    
    <!-- terminos y condiciones -->
    <div class="alert alert-primary" role="alert">
      <h1 class="display-4" align="center">Terminos y Condiciones</h1>
        <h4>Usted acepta <strong><strong>no</strong></strong> utilizar el Servicio para:</h4>
        <ol>
            <li> Subir, publicar o poner a disposición cualquier Contenido que sea ilegal, dañino, amenazante, abusivo, acosador, malicioso, difamatorio, vulgar, obsceno, calumnioso, invasivo de la privacidad de otra persona, odioso o racial, étnica o de otra manera objetable  </li>
            <li> Dañar a menores de cualquier manera </li>
            <li> Suplantar a cualquier persona</li>
            <li> Subir, publicar o poner a disposición cualquier Contenido que no tenga derecho a poner a disposición bajo ninguna ley o bajo relaciones contractuales o fiduciarias (como información privilegiada, información confidencial y de propiedad adquirida o divulgada como parte del empleo relaciones personales o bajo acuerdos de confidencialidad) </li>
            <li> Subir, publicar o poner a disposición cualquier Contenido que infrinja cualquier patente, marca comercial, secreto comercial, derechos de autor u otros derechos de propiedad ("Derechos") de cualquier parte, esto incluye vincular o redirigir a cualquier contenido o archivos de derechos de autor alojados en recursos/servidores de terceros. </li>
            <li> Subir, publicar o poner a disposición cualquier publicidad no solicitada o no autorizada, materiales promocionales, "correo basura", "spam", "cartas en cadena", "esquemas piramidales" o cualquier otra forma de solicitud,</li>
            <li> Subir, publicar o poner a disposición cualquier material que contenga virus de software o cualquier otro código de computadora, archivos o programas diseñados para interrumpir, destruir o limitar la funcionalidad de cualquier software o hardware de computadora o equipo de telecomunicaciones </li>
            <li> Subir, publicar o poner a disposición cualquier material que sea del tipo de  broadcast / streaming.
            <li> Subir, publicar o poner a disposición cualquier material que sea de naturaleza pornográfica.
            <li> Violar intencionalmente o no cualquier ley local, estatal, nacional o internacional aplicable, y cualquier regulación que tenga fuerza de ley </li>
            <li> Proporcionar apoyo material o recursos, fomentar o apoyar a cualquier organización terrorista</li>
            <li> Acosar a otro </li> 
            <li> Subir, publicar cualquier otro material con el fin de distribuir archivos, retransmitir o transmitir.
        </ol>
    </div>

    <div class="alert alert-primary" role="alert">
        <h1 class="display-4" align="center"> Privacidad </h1>
            <h4>Los datos que se almacenan sobre los usuarios incluyen información como:</h4>
            <ol>
                <li> Nombres y Apellidos </li>
                <li> Dirección de correo electrónico </li>
                <li> Contraseña<strong>*</strong> (por lo que se recomienda usar una contraseña que no use en otra plataforma)</li>
                <li> Escuela(s) de estudio </li>
            </ol>
            Los cuales se usan para el registro de usuarios y para el acceso a los servicios.
            Solo la dirección de correo electrónico de los docentes registrados en el sistema son visibles para los demás usuarios, el resto de estos datos son privados.
            <br>
            Todos los demás datos no mencionados anteriormente subidos por los usuarios son visibles para todo el público, por lo que se recomienda que los usuarios no suban material que no deseen que sea pública.
            <br>
    </div>

    <footer class="footer">
        <div class="container">
            <span class="text-muted">
                <p>
                    <strong>*</strong> Las contraseñas son cifradas y no se almacenan en forma de texto plano.
                </p>
            </span>
        </div>




@endsection
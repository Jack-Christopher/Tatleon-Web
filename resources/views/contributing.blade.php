@extends('layouts.services')

@section('title')
    Contribución
@endsection

@section('scripts')
@endsection

@section('styles')
@endsection

@section('content')
    <h1 class="display-5" align="center">Contribución</h1>
    <br>
    <div class="container">

        Esta guia describe como puedes formar parte del desarrollo de Tatleon web.
        <br>
        Después de leer esta guia, sabrás:

        <ul>
            <li>  <a href="#bug-report" class="link-secondary"> Reportar un error.</a> </li>
            <li>  <a href="#support-questions" class="link-secondary"> Preguntas de soporte.</a> </li>
            <li>  <a href="#considerations" class="link-secondary"> Consideraciones.</a> </li>
            <li>  <a href="#documentation" class="link-secondary"> Documentación.</a> </li>
            <li>  <a href="#source-code" class="link-secondary"> Codigo fuente.</a> </li>

        </ul>

    </div>

    <div id="bug-report" class="container" >
        <h2 align="center">Reportar un error</h2>
        Si reportas un error, debes incluir un título y una descripción clara del error. También debes incluir toda la información relevante posible y un ejemplo de código que muestre el error. El objetivo de un reporte de error es hacerlo fácil para ti y otros replicar el error y desarrollar una solución.
        Recuerda, los reportes de errores se crean con la esperanza de que otros con el mismo problema te ayudarán a solucionarlo. No esperamos que el reporte de error se vea automáticamente en cualquier actividad o que otros salgan a solucionarlo. Crear un reporte de error sirve para ayudarte y otros empezar el camino de solucionar el problema. Si quieres contribuir, puedes ayudar a solucionar cualquiera de los errores que se encuentran en nuestros sistemas de seguimiento de problemas. Debes estar autenticado con GitHub para ver todos los problemas de Laravel.
    </div>    
    <br>
    <div id="support-questions" class="container">
        <h2 align="center">Preguntas de soporte</h2>
        Para responder cualquier pregunta de soporte, debes enviar un correo electrónico a <a href="mailto:tatleonweb@gmail.com"> este correo</a>.
        <br>
        Si es una pregunta que puede ser útil para los demás usuarios, se publicará en la sección de preguntas frecuentes.
    </div>
    <br>
    <div id="considerations" class="container" >
        <h2 align="center">Consideraciones</h2>
        Las siguientes consideraciones deben ser tomadas cuidadosamente antes de comenzar a contribuir:
        <ul>
            <li> Cambios que son de naturaleza cosmética y no añaden nada significativo a la estabilidad, funcionalidad o testabilidad de Tatleon Web generalmente no serán aceptados.</li>
            <li> Cambios que no tienen como fin único mejorar alguna funcionalidad de Tatleon Web generalmente no serán aceptados.</li>
            <li> Todo aporte que apunte a una mejora significativa (en legibilidad o entendimiento) de la documentación de Tatleon Web generalmente será aceptado.</li>
            <li> Acciones que involucren cualquier tipo de agresión o falta de respeto no serán aceptadas.</li>
        </ul>        
    </div>
    <br>
    <div id="documentation" class="container">
        <h2 align="center">Documentación</h2>
        La documentación la puedes encontrar <a href="documentation" class="link-success">aquí</a>.
        Si tienes ideas para mejorar o actualizar la documentación (sobre una funcionalidad aún no detallada) puedes sugerir los cambios desde un pull request.
    </div>
    <br>
    <div id="source-code" class="container">
        <h2 align="center">Codigo fuente</h2>
        El código fuente está disponible en <a href="https://github.com/Jack-Christopher/Tatleon-Web">GitHub</a>.
        Cualquier cambio que quieras hacer en el código fuente debe ser enviado a través de un pull request.
        Además, si quieres ayudar a mantener el proyecto funcionando, puedes ayudar del siguiente modo:
        <ul>
            <li> Parchando algún bug en el código fuente que puedes encontrar en <a href="https://github.com/Jack-Christopher/Tatleon-Web/issues"> Github issues</a>.</li> 
            <li> Dessarrollando alguna funcionalidad nueva en el código fuente que puedes encontrar en alguún <em>feature</em> de los branches de <a href="https://github.com/Jack-Christopher/Tatleon-Web/branches"> Github branches</a>.</li>
            <li> Ayudando a mantener el código fuente actualizado.</li>
        </ul>
    </div>
    <br>

@endsection
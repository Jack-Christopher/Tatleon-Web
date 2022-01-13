@extends('layouts.services')

@section('title')
    Repositorio de Enlaces
@endsection

@section('scripts')
@endsection

@section('styles')
    <link rel="stylesheet" href="{!! asset('css/link_repository.css') !!}">
@endsection

@section('content')

    <div class="container">

    @if (isset($schools))
    <table class="table table-hover table-bordered">
        <thead>
            </tr>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($schools != null) 
            {
                foreach ($schools as $school) 
                {
                    echo "<tr>";
                    echo "<th scope=\"row\">" . $school->id . "</th>";
                    echo "<td>" . $school->name . "</td>";
                    echo "<td> <a href=\"school/" . $school->id . "\" class=\"btn btn-success\"> Explorar</a> </td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>

    @else
    <?php
        echo "<br>";
        echo "<div class=\"jumbotron\"  align=\"center\">";
        echo "<br>";
        echo "<h6 class=\"display-6\"> Áreas de la Universidad Nacional de San Agustín </h6>";
        echo "<br><br>";
        echo "<a href=\"link_repository/ing\" class=\"btn btn-success btn-lg\">Ingenierías</a>";
        echo "<br><br>";
        echo "<a href=\"link_repository/bio\" class=\"btn btn-warning btn-lg\">Biomédicas</a>";
        echo "<br><br>";
        echo "<a href =\"link_repository/soc\" class=\"btn btn-danger btn-lg\">Sociales</a>";
        echo "<br><br>";    
        echo "</div>";
        echo "<br>";
    ?>
    @endif  

</div>

@endsection
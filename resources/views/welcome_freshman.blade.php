@extends('layouts.services')

@section('title')
    Bienvenido Cachimbo
@endsection

@section('scripts')
@endsection

@section('styles')
@endsection

@section('content')
<div class="container">

@switch($status)
    @case('search')
        <br>
        <div class="jumbotron container align-items-center">
            <br>
            <form action="{{ route('welcome_freshman_by_school') }}" method="GET">
                <div class="form-group">
                    <label for="school">Seleccione la Escuela Profesional: </label>
                    <select class="form-select form-select-sm" id="school" name="school">
                        @forelse ($schools as $school)
                            <option value="{{ $school->id }}">{{ $school->name }}</option>
                        @empty
                            <option value="">No hay escuelas disponibles</option>
                        @endforelse
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </form>
            <br>
        </div>
    @break
    @case('watch')
        <h1 class="display-3"> Inicio de {{ $school->name }}</h1>
        <br>
        <table class="table table-hover table-bordered">
        <thead>
            <tr>
            <th scope="col">Propiedad</th>
            <th scope="col">Valor</th>
            </tr>

        </thead>
        <tbody>
            @forelse ($data as $property)
                <tr>
                    <td>{{ $property[0] }}</td>
                    <td>{{ $property[1] }}</td>                
                </tr>
            @empty
                <tr>
                    <td colspan="4"> Aún no hay información disponible </td>
                </tr>
            @endforelse
        </tbody>
        </table>

        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('welcome_freshman_edit_view', ['school_id' => $school->id])}}" class="btn btn-primary">
                    Editar
                </a>
            </div>
        </div>
    <br>
@endswitch

</div>


@endsection
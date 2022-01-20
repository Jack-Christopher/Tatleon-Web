@extends('layouts.services')

@section('title')
    Ayuda Externa
@endsection

@section('scripts')
@endsection

@section('styles')
@endsection

@section('content')

<div class="container">

    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Tipo</th>
          <th scope="col">Descripción</th>
          <th scope="col">Fecha Limite</th>
            <th scope="col">Contacto</th>
        </tr>

      </thead>
      <tbody>
        @forelse($help as $row) 
            <tr>
                <th scope="row">{{ $row['id'] }}</th>
                <td>{{ $row['is_offer'] ? 'Oferta' : 'Solicitud' }}</td>
                <td>{{ $row['description'] }} </td>
                <td>{{ $row['deadline'] }} </td>
                <td>{{ $row['contact_method'] }}: {{ $row['contact_info'] }}</td>

            </tr>
        @empty
            <tr>
               <td colspan="4"> Aún no hay ofrecimiento/solicitud de ayuda disponible </td>
            </tr>
        @endforelse
      </tbody>
    </table>

    @auth
        <div class="row" align="right">
            <div class="col-md-12">
                <a href="external_help/add_help" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Agregar Solicitud/Oferta
                </a>
            </div>
        </div>
    @else
        <div class="alert alert-warning alert-dismissible fade show" role="alert" align="center">
        <strong>¡Atención!</strong> Debes <a href="/login" class="alert-link">iniciar sesión</a> para poder agregar enlaces.
    @endauth
</div>



@endsection
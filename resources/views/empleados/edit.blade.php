@extends('layouts.app')
@section('content')
<style>
/* Credit to bootsnipp.com for the css for the color graph */

 body {
           background: #4D75A2;
       }
       h3 {
            color: #ffffff;

            font-size: 24px;
            font-weight: 600;
        }
</style>
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <b>Formulario editar empleados</b>
        <a href="{{ route('empleados.index')}}" class="btn btn-primary ml-auto">
        <i class="fa fa-arrow-left">volver</i></a>
    </div>
    <div class="card-body">
        <form action="{{ route('empleados.update', $empleados->idempleados)}}" method="POST" enctype="multipart/form-data" id="create">
        @method('PUT')
        @include('empleados.partials.form')
        </form>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary" form="create">
            <i class="fa fa-save"></i>
            Guardar cambios
        </button>
        <button class="btn btn-danger" form="delete_{{ $empleados->idempleados}}" onclick="return confirm('¿Esta seguro de eliminar registro?')">
            <i class="fa fa-trash"></i>
            Eliminar
        </button>
        <form action="{{ route('empleados.destroy', $empleados->idempleados) }}" id="delete_{{$empleados->idempleados}}" method="post" enctype="multipart/form-data" hidden>
            @csrf
            @method('DELETE')
        </form>
    </div>
</div>
@endsection
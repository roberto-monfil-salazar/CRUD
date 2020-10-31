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
        <b>DETALLE Empleados</b>
        <a href="{{route ('empleados.index')}}" class="btn btn-primary  ml-auto">
            <i class="fa fa-arrow-left">Volver</a></i>
    </div>
        <div class="card-body">
            <p><b>Nombres</b><br>{{$empleados->nombres}}</p>
            <p><b>Apellido Paterno</b><br>{{$empleados->apellidoPaterno}}</p>
            <p><b>Apellido Materno</b><br>{{$empleados->apellidoMaterno}}</p>
            <p><b>Telefono</b><br>{{$empleados->telefono}}</p>
            <p><b>Fecha Nacimiento</b><br>{{$empleados->fechaNacimiento}}</p>
            <p><b>Lugar Nacimiento</b><br>{{$empleados->lugarNacimiento}}</p>
            <p><b>Estado Civil</b><br>{{$empleados->estadoCivil}}</p>
            <p><b>Profesion</b><br>{{$empleados->profesion}}</p>
            <p><b>Titulo</b><br>{{$empleados->titulo}}</p>
            <p><b>Grupo Sanguineo</b><br>{{$empleados->grupoSanguineo}}</p>
            <p><b>Matricula</b><br>{{$empleados->matricula}}</p>
            <p><b>Fecha Ingreso</b><br>{{$empleados->fechaIngreso}}</p>
            <p><b>Fecha Salida</b><br>{{$empleados->fechaSalida}}</p>
            <p><b>Curp</b><br>{{$empleados->curp}}</p>
            <p><b>RFC</b><br>{{$empleados->rfc}}</p>
            <p><b>Direccion</b><br>{{$empleados->direccion}}</p>

        </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('empleados.edit', $empleados->idempleados)}}">
                    <i class="fa fa-edit"></i>
                    Editar
                </a>
            </div>
</div>

@endsection
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
        <b>FORMULARIO EMPLEADOS</b>
        <a href="{{route ('empleados.index')}}" class="btn btn-primary  ml-auto">
            <i class="fa fa-arrow-left">Volver</i></a>
    </div>
        <div class="card-body">
            <form action="{{route('empleados.store')}}" method="POST" enctype="multipart/form-data" id="create">
                @include('empleados.partials.form')
            </form>
        </div>
            <div class="card-footer">
                <button class="btn btn-primary" form="create">
                    <i class="fa fa-plus"></i>
                    crear
                </button>
            </div>
</div>

@endsection
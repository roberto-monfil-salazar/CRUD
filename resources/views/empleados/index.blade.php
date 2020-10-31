@extends('layouts.app')
@section('content')
<style>
/* Credit to bootsnipp.com for the css for the color graph */
.card {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  }

 body {
           background: #6daffe;

       }
       h3 {
            color: #ffffff;

            font-size: 24px;
            font-weight: 600;
        }
.card-body {
            color: #ffffff;

            font-size: 14px;
            font-weight: 699;

        } 
.table-responsive {
            color: #ffffff;

            font-size: 13px;
            font-weight: 600;

        } 
</style>

<div class="">
    <b>EMPLEADOS</b>
    <a href="{{route('empleados.create')}}" class="btn btn-primary ml-auto">
        <i class="fa fa-plus"></i>
        agregar
    </a>
</div>
<div class="card-body">
    <a href="{{route('home')}}" class="btn btn-primary ml-auto">
        <i class="fa fa-home"></i>
        home
    </a>
</div>
<div class="card mt-3">
    <a href="{{route('empleados.pdf')}}" class="btn btn-secondary ml-auto">
        PDF
    </a>
</div>

<div class="card-body">
    <div class="row">
        <div class="col-4">
            <label>Listar:</label>
            <div class="form-group m-0">
            <select class="form-control" id="limit" name="limit">
                            @foreach ([10,20,50,100] as $limit)
                                <option value="{{$limit}}" @if (isset($_GET['limit']))
                                    {{($_GET['limit']==$limit)?'selected':''}}
                                    @endif>{{$limit}}</option>
                            @endforeach
                        </select>
            </div>
        </div>
        <div class="col-8">
            <div class="form-group">
                <label>
                    Buscar:
                </label>
                <input class="form-control" id="search" type="text"value="{{(isset($_GET['search']))?$_GET['search']:''}}">
            </div>
        </div>
    </div>


    @if($empleados->total() > 10)
        {{$empleados->links()}}
        @endif
    
</div>
<div class="table-responsive col-12" >
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Telefono</th>
                    <th>Fecha Nacimiento</th>
                    <th>Estado Civil</th>
                    <th>Grupo Sanguineo</th>
                    <th>Curp</th>
                    <th>RFC</th>
                    <th>Direccion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($empleados as $empleado)
                <tr>
                    <td>
                        {{$empleado->idempleados }}
                    </td>
                    <td>
                        {{ $empleado->nombres}}
                    </td>
                    <td>
                        {{ $empleado->apellidoPaterno}}
                    </td>
                    <td>
                        {{ $empleado->apellidoMaterno}}
                    </td>
                    <td>
                        {{ $empleado->telefono}}
                    </td>
                    <td>
                        {{ $empleado->fechaNacimiento}}
                    </td>
                    <td>
                        {{ $empleado->estadoCivil}}
                    </td>
                    <td>
                        {{ $empleado->grupoSanguineo}}
                    </td>
                    <td>
                        {{ $empleado->curp}}
                    </td>
                    <td>
                        {{ $empleado->rfc}}
                    </td>
                    <td>
                        {{ $empleado->direccion}}
                    </td>
                     <td>
                        <div class="btn-group" role="group" aria-label="Acciones">
                            <a href="{{ route('empleados.show', $empleado->idempleados) }}" class="btn btn-info btn-sm">
                            <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('empleados.edit', $empleado->idempleados)}}" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button type="submit" class="btn btn-danger btn-sm" form="delete_{{$empleado->idempleados}}" onclick="return confirm('¿Estas seguro que deseas eliminar el item?')">
                                <i class="fa fa-trash"></i>
                            </button>
                            <form action="{{route('empleados.destroy', $empleado->idempleados)}}" id="delete_{{$empleado->idempleados}}"
                                method="post" enctype="multipart/form-data" hidden>
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="card-footer">
        @if($empleados->total() > 10)
        {{$empleados->links()}}
        @endif
    </div>
</div>
@endsection


@section('scripts')
<script type="text/javascript">
$('#limit').on('change', function() {
    window.location.href = '{{ route( "empleados.index" ) }}?limit=' + $(this).val() + '&search=' + $('#search').val()
})

$('#search').on('keyup', function(e) {
    if (e.keyCode == 13) {
        window.location.href = '{{ route("empleados.index") }}?limit=' + $('#limit').val() + '&search=' + $(this).val()
    }
})
</script>
@endsection
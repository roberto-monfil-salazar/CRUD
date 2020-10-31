<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<b>DETALLE DE EMPLEADOS</b>
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
                    <th>Lugar Nacimiento</th>
                    <th>Estado Civil</th>
                    <th>Profesion</th>
                    <th>Titulo</th>
                    <th>Grupo Sanguineo</th>
                    <th>Matricula</th>
                    <th>Fecha Ingreso</th>
                    <th>Fecha Salida</th>
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
                        {{ $empleado->lugarNacimiento}}
                    </td>
                    <td>
                        {{ $empleado->estadoCivil}}
                    </td>
                    <td>
                        {{ $empleado->profesion}}
                    </td>
                    <td>
                        {{ $empleado->titulo}}
                    </td>
                    <td>
                        {{ $empleado->grupoSanguineo}}
                    </td>
                    <td>
                        {{ $empleado->matricula}}
                    </td>
                    <td>
                        {{ $empleado->fechaIngreso}}
                    </td>
                    <td>
                        {{ $empleado->fechaSalida}}
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
                </tr>
                @endforeach
            </tbody>
        </table>

</body>
</html>
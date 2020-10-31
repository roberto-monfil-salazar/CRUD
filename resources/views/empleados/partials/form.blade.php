@csrf
<div class="row">
    <div class="col-8">

        <div class="form-group">
            <label for="">Nombres</label>
            <input type="text" class="form-control" name="nombres" value="{{ (isset($empleados))?$empleados->nombres:old('nombres')}}">
        </div>

    <div class="form-group">
        <label for="">Apellido Paterno</label>
        <input type="text" class="form-control" name="apellidoPaterno" value="{{ (isset($empleados))?$empleados->apellidoPaterno:old('apellidoPaterno')}}">
    </div>
    <div class="form-group">
        <label for="">Apellido Materno</label>
        <input type="text" class="form-control" name="apellidoMaterno" value="{{ (isset($empleados))?$empleados->apellidoMaterno:old('apellidoMaterno')}}">
    </div>
    <div class="form-group">
        <label for="">Telefono</label>
        <input type="text" class="form-control" name="telefono" value="{{ (isset($empleados))?$empleados->telefono:old('telefono')}}">
    </div>
    <div class="form-group">
        <label for="">Fecha Nacimiento</label>
        <input type="date" class="form-control" name="fechaNacimiento" value="{{ (isset($empleados))?$empleados->fechaNacimiento:old('fechaNacimiento')}}">
    </div>
    <div class="form-group">
        <label for="">Lugar Nacimiento</label>
        <input type="text" class="form-control" name="lugarNacimiento" value="{{ (isset($empleados))?$empleados->lugarNacimiento:old('lugarNacimiento')}}">
    </div>
     <div class="form-group">
        <label for="">Estado Civil</label>
        <input type="text" class="form-control" name="estadoCivil" value="{{ (isset($empleados))?$empleados->estadoCivil:old('estadoCivil')}}">
    </div>
    <div class="form-group">
        <label for="">Profesion</label>
        <input type="text" class="form-control" name="profesion" value="{{ (isset($empleados))?$empleados->profesion:old('profesion')}}">
    </div>
    <div class="form-group">
        <label for="">Titulo</label>
        <input type="text" class="form-control" name="titulo" value="{{ (isset($empleados))?$empleados->titulo:old('titulo')}}">
    </div>
    <div class="form-group">
        <label for="">Grupo Sanguineo</label>
        <input type="text" class="form-control" name="grupoSanguineo" value="{{ (isset($empleados))?$empleados->grupoSanguineo:old('grupoSanguineo')}}">
    </div>
    <div class="form-group">
        <label for="">Matricula</label>
        <input type="text" class="form-control" name="matricula" value="{{ (isset($empleados))?$empleados->matricula:old('matricula')}}">
    </div>
    <div class="form-group">
        <label for="">Fecha Ingreso</label>
        <input type="date" class="form-control" name="fechaIngreso" value="{{ (isset($empleados))?$empleados->fechaIngreso:old('fechaIngreso')}}">
    </div>
    <div class="form-group">
        <label for="">Fecha Salida</label>
        <input type="date" class="form-control" name="fechaSalida" value="{{ (isset($empleados))?$empleados->fechaSalida:old('fechaSalida')}}">
    </div>
    <div class="form-group">
        <label for="">Curp</label>
        <input type="text" class="form-control" name="curp" value="{{ (isset($empleados))?$empleados->curp:old('curp')}}">
    </div>
    <div class="form-group">
        <label for="">rfc</label>
        <input type="text" class="form-control" name="rfc" value="{{ (isset($empleados))?$empleados->rfc:old('rfc')}}">
    </div>
    <div class="form-group">
        <label for="">Direccion</label>
        <input type="text" class="form-control" name="direccion" value="{{ (isset($empleados))?$empleados->direccion:old('direccion')}}">
    </div>
        </div>
</div>

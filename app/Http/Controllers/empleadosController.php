<?php

namespace App\Http\Controllers;
use App\Entities\EmpleadosModel;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade;


class empleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $empleados = EmpleadosModel::select('*');

        $limit=(isset($request->limit)) ? $request->limit:10;
 
        if(isset($request->search)){
            $empleados = $empleados->where('nombres','like', '%'.$request->search.'%')
             ->orWhere('apellidoPaterno','like', '%'.$request->search.'%')
             ->orWhere('apellidoMaterno','like', '%'.$request->search.'%')
             ->orWhere('telefono','like', '%'.$request->search.'%')
             ->orWhere('fechaNacimiento','like', '%'.$request->search.'%')
             ->orWhere('lugarNacimiento','like', '%'.$request->search.'%')
             ->orWhere('estadoCivil','like', '%'.$request->search.'%')
             ->orWhere('profesion','like', '%'.$request->search.'%')
             ->orWhere('titulo','like', '%'.$request->search.'%')
             ->orWhere('grupoSanguineo','like', '%'.$request->search.'%')
             ->orWhere('matricula','like', '%'.$request->search.'%')
             ->orWhere('fechaIngreso','like', '%'.$request->search.'%')
             ->orWhere('fechaSalida','like', '%'.$request->search.'%')
             ->orWhere('curp','like', '%'.$request->search.'%')
             ->orWhere('rfc','like', '%'.$request->search.'%')
             ->orWhere('direccion','like', '%'.$request->search.'%');
        }
 
        $empleados = $empleados->paginate($limit)->appends($request->all());
 
        return view('empleados.index', compact('empleados')) ;
        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleados = new EmpleadosModel();
        $empleados = $this->createUpdateEmpleados($request, $empleados);

        return redirect()
        ->route('empleados.index')
        ->with('message','Se ha creado un registro correctamente');
    }
    public function createUpdateEmpleados(Request $request, $empleados){
        $empleados->nombres = $request->nombres;
        $empleados->apellidoPaterno = $request->apellidoPaterno;
        $empleados->apellidoMaterno = $request->apellidoMaterno;
        $empleados->telefono = $request->telefono;
        $empleados->fechaNacimiento = $request->fechaNacimiento;
        $empleados->lugarNacimiento = $request->lugarNacimiento;
        $empleados->estadoCivil = $request->estadoCivil;
        $empleados->profesion = $request->profesion;
        $empleados->titulo = $request->titulo;
        $empleados->grupoSanguineo = $request->grupoSanguineo;
        $empleados->matricula = $request->matricula;
        $empleados->fechaIngreso = $request->fechaIngreso;
        $empleados->fechaSalida = $request->fechaSalida;
        $empleados->curp = $request->curp;
        $empleados->rfc = $request->rfc;
        $empleados->direccion = $request->direccion;
 
        $empleados->save();
        
        return $empleados;

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($empleados)
    {
        $empleados = EmpleadosModel::where('idempleados', $empleados)->firstOrFail();
        return view('empleados.show', compact('empleados')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($empleados)
    {
        $empleados = EmpleadosModel::where('idempleados', $empleados)->firstOrFail();
        return view('empleados.edit', compact('empleados'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $empleados)
    {
        $empleados = EmpleadosModel::where('idempleados', $empleados)->firstOrFail();
        $empleados = $this->createUpdateEmpleados($request, $empleados);

        return redirect()
        ->route('empleados.show', $empleados)
        ->with('message','Se ha actualizado un registro correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($empleados)
    {
        $empleados=EmpleadosModel::findOrFail($empleados);
        $empleados->delete();
        return redirect()
        ->route('empleados.index')
        ->with('message', 'se ha eliminado correctamente');
    }
    public function exportPDF(){
        $empleados = EmpleadosModel::get();
        $pdf = Facade::loadView('empleados.exportPDF',compact('empleados'));
       // return $pdf ->stream();
        $pdf->setPaper('x4','landscape');
        return $pdf->stream(); 
    
    }
}

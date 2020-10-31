<?php 
namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class EmpleadosModel extends Model
{
	public $timestamps = false;
	protected $primaryKey='idempleados';
	protected $table='empleados';
	protected $fillable =['nombres',
	'apellidoPaterno',
	'apellidoMaterno',
	'telefono',
	'fechaNacimiento',
	'lugarNacimiento',
	'estadoCivil',
	'profesion',
	'titulo',
	'grupoSanguineo',
	'matricula',
	'fechaIngreso',
	'fechaSalida',
	'curp',
	'rfc',
	'direccion'];
}

?>
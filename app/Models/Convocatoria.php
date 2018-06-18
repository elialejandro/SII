<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    protected $table='convocatoria';
    public $timestamps =false;


   protected $fillable = [ 'Nombre', 'Fecha_inicio', 'Fecha_fin'];

	public function proyectos()
	{
	    return $this->hasMany('App\Models\Proyecto');
	}        

}

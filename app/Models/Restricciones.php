<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restricciones extends Model
{
    protected $table='restircciones';
    public $timestamps =false;

   protected $fillable = [ 'descripcion', 'valor' ];

}
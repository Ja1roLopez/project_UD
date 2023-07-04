<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['nombre', 'apellido', 'identificacion', 'telefono', 'email'];
    protected $primaryKey = "id";
    protected $table = "empleados";

}

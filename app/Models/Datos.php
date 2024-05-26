<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Datos extends Model
{
    use HasFactory;
    
    protected $table = 'datos'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id'; // Nombre de la clave primaria en la tabla
    
    protected $fillable = [
        'nombre', 'edad', 'ciudad'
    ];
}

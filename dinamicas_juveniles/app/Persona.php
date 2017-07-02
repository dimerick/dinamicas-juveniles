<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'persona';
    protected $guarded = ['id'];
    protected $fillable = ['nombre', 'fecha_nac', 'id_genero', 'id_nivel_educ', 'id_grupo_pob',
        'email', 'telefono', 'id_comuna', 'barrio', 'rol'];
}

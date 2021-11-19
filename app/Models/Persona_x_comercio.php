<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona_x_comercio extends Model
{
    static $rules = [
        'comercio_id' => 'required',
        'persona_id' => 'required',
        'tipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['comercio_id','persona_id','tipo'];

    public function Persona(){

        return $this->belongsTo(EntidadesComerciale::class);
    }

    public function EntidadComercial(){

        return $this->belongsTo(EntidadesComerciale::class,'id','comercio_id');
    }

}

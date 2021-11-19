<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EntidadesComerciale
 *
 * @property $id
 * @property $nombre
 * @property $domicilio
 * @property $legajo
 * @property $expediente
 * @property $rubro
 * @property $tipo
 * @property $parada
 * @property $partida
 * @property $categoriaComercial_id
 * @property $habilitacionComercial_id
 * @property $licenciaReba_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EntidadesComerciale extends Model
{

    static $rules = [
		'nombre' => '',
		'domicilio' => '',
		'legajo' => '',
		'expediente' => '',
		'rubro' => '',
		'tipo' => '',
		'parada' => '',
		'partida' => '',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','domicilio','legajo','expediente','rubro','tipo','parada','partida','categoriaComercial_id','habilitacionComercial_id','licenciaReba_id'];

    public function Persona_x_comercio(){

        return $this->hasMany(persona_x_comercio::class,'entidadComercial_id','id');

    }

    public function Vehiculo()
    {
        return $this->hasMany(Vehiculo::class,'entidadComercial_id','id');
    }

    public function LicenciaReba()
    {
        return $this->belongsTo(EntidadesComerciale::class,'id','licenciaReba_id');
    }

    public function HabilitacionComercial()
    {
        return $this->belongsTo(EntidadesComerciale::class,'id','habilitacionComercial_id');
    }

    public function CategoriaComercial()
    {
        return $this->belongsTo(EntidadesComerciale::class,'id','categoriaComercial_id');
    }


}

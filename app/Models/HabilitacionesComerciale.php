<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HabilitacionesComerciale
 *
 * @property $id
 * @property $tipo
 * @property $fechaInicio
 * @property $fechaVencimiento
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HabilitacionesComerciale extends Model
{

    static $rules = [
		'tipo' => '',
		'fechaInicio' => '',
		'fechaVencimiento' => '',
		'estado' => '',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo','fechaInicio','fechaVencimiento','estado'];

    public function EntidadComercial(){

        return $this->hasOne(EntidadesComerciale::class,'habilitacionComercial_id','id');
    }

}

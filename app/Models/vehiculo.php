<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 *
 * @property $id
 * @property $marca
 * @property $modelo
 * @property $dominio
 * @property $fechaVencimientoSeguro
 * @property $fechaVencimientoVtv
 * @property $fechaVencimientoLicencia
 * @property $titular_id
 * @property $chofer_id
 * @property $vehiculoContratado
 * @property $entidadComercial_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehiculo extends Model
{

    static $rules = [
		'marca' => '',
		'modelo' => '',
		'dominio' => '',
		'fechaVencimientoSeguro' => '',
		'fechaVencimientoVtv' => '',
		'fechaVencimientoLicencia' => '',
		'titular_id' => '',
		'chofer_id' => '',
		'vehiculoContratado' => '',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['marca','modelo','dominio','fechaVencimientoSeguro','fechaVencimientoVtv','fechaVencimientoLicencia','titular_id','chofer_id','vehiculoContratado','entidadComercial_id'];


    public function EntidadComercial()
    {
        return $this->belongsTo(EntidadesComerciale::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LicenciasReba
 *
 * @property $id
 * @property $categoria
 * @property $fechaOtorgamiento
 * @property $fechaVencimiento
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class LicenciasReba extends Model
{

    static $rules = [
		'categoria' => '',
		'fechaOtorgamiento' => '',
		'fechaVencimiento' => '',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['categoria','fechaOtorgamiento','fechaVencimiento'];

    public function EntidadComercial()
    {
        return $this->hasOne(EntidadesComerciale::class,'licenciaReba_id','id');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LibretasSanitaria
 *
 * @property $id
 * @property $fechaVencimiento
 * @property $medicoFirmante
 * @property $persona_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class LibretasSanitaria extends Model
{

    static $rules = [
		'fechaVencimiento' => '',
		'medicoFirmante' => '',
		'persona_id' => '',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fechaVencimiento','medicoFirmante','persona_id'];

    public function Persona(){

        return $this->hasOne(Persona::class,'persona_id','id');
    }

}

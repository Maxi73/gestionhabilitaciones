<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 *
 * @property $id
 * @property $apellido
 * @property $nombre
 * @property $documento
 * @property $fechaNacimiento
 * @property $tipo
 * @property $documentoTemporal
 * @property $telefonoPrefijo
 * @property $telefono
 * @property $movilPrefijo
 * @property $movil
 * @property $direccion
 * @property $barrio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{

    static $rules = [
		'apellido' => '',
		'nombre' => '',
		'documento' => '',
		'fechaNacimiento' => '',
		'tipo' => 'required',
		'documentoTemporal' => '',
		'telefonoPrefijo' => '',
		'telefono' => '',
		'movilPrefijo' => '',
		'movil' => '',
		'direccion' => '',
		'barrio' => '',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['apellido','nombre','documento','fechaNacimiento','tipo','documentoTemporal','telefonoPrefijo','telefono','movilPrefijo','movil','direccion','barrio'];

    public function Persona_x_comercio(){

        return $this->hasMany(persona_x_comercio::class,'persona_id','id');

    }


}

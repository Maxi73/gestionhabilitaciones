<?php

namespace App\Http\Controllers;

use App\Models\CategoriasComerciale;
use App\Models\EntidadesComerciale;
use App\Models\HabilitacionesComerciale;
use App\Models\LicenciasReba;
use App\Models\Persona;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

/**
 * Class EntidadesComercialeController
 * @package App\Http\Controllers
 */
class EntidadesComercialeController extends Controller
{

    public function index()
    {
        $entidadesComerciales = EntidadesComerciale::paginate();
        
        return view('entidades-comerciale.index', compact('entidadesComerciales'));
    }

    public function create()
    {
        
        $entidadesComerciale = new EntidadesComerciale();
        $vehiculo = new Vehiculo();
        $habilitacionComercial = new HabilitacionesComerciale();
        $licenciasReba = new LicenciasReba();
        $persona = Persona::all();
        $categorias = CategoriasComerciale::all();
         $vehiculosAsociados = Vehiculo::select("id","marca","modelo","dominio")->get();
       // dd($categorias);

        return view('entidades-comerciale.create')
                        ->with('entidadesComerciale',$entidadesComerciale)
                        ->with('vehiculosAsociados',$vehiculosAsociados)
                        ->with('vehiculo',$vehiculo)
                        ->with('habilitacionesComerciales',$habilitacionComercial)
                        ->with('licenciasReba',$licenciasReba)
                        ->with('persona',$persona)
                        ->with('categorias',$categorias);

    }


    public function store(Request $request)
    {
        //dd($request->all());
;       // request()->validate(EntidadesComerciale::$rules);
        $datos = $request->all();

        /*
          'nombre' => '',
          'domicilio' => '',
          'legajo' => '',
          'expediente' => '',
          'rubro' => '',
          'tipo' => '',
          'parada' => '',
          'partida' => '',
  */
    //    dd($datos);
        

            $entidadComercial = new EntidadesComerciale();
            $entidadComercial->nombre = $datos['nombre'];
            $entidadComercial->domicilio = $datos['domicilio'];
            $entidadComercial->legajo = $datos['legajo'];
            $entidadComercial->expediente = $datos['expediente'];
            $entidadComercial->rubro = $datos['rubro'];
            $entidadComercial->tipo = $datos['tipo'];
            $entidadComercial->parada = $datos['parada'];
            $entidadComercial->categoriaComercial_id = $datos['categoriasComerciales'];
            $entidadComercial->habilitacionComercial_id = $datos['partida'];
            $ok = $entidadComercial->save();

        

        if($ok)
        {
            $entidadesComerciales = EntidadesComerciale::paginate();
            return view('entidades-comerciale.index', compact('entidadesComerciales'))->with('success', 'Entidad creada correctamente.');
        }
        else
        {
           $entidadesComerciales = EntidadesComerciale::paginate();
           return view('entidades-comerciale.index', compact('entidadesComerciales'))->with('error', 'La Entidad no se creo correctamente.');
        }

    }

    public function show($id)
    {
        $entidadesComerciale = EntidadesComerciale::find($id);

        return view('entidades-comerciale.show', compact('entidadesComerciale'));
    }

    public function edit($id)
    {
        $entidadesComerciale = EntidadesComerciale::find($id);
        $vehiculos = Vehiculo::all();
        $vehiculosAsociados = Vehiculo::select("id","marca","modelo","dominio")->where("entidadComercial_id",$id)->get();
      if($entidadesComerciale->habilitacionComercial_id){
          $habilitacionComercial = HabilitacionesComerciale::find($entidadesComerciale->habilitacionComercial_id);
      }else{
          $habilitacionComercial = new HabilitacionesComerciale();
      }

        $personas = Persona::all();

            $categorias = CategoriasComerciale::all();


        if($entidadesComerciale->licenciaReba_id){
            $licenciasReba = LicenciasReba::find($entidadesComerciale->licenciaReba_id);
        }else{
            $licenciasReba = new LicenciasReba();
        }

        return view('entidades-comerciale.edit', compact('entidadesComerciale'))
            ->with('vehiculo',$vehiculos)
            ->with('vehiculosAsociados',$vehiculosAsociados)
            ->with('habilitacionesComerciales',$habilitacionComercial)
            ->with('categorias',$categorias)
            ->with('licenciasReba',$licenciasReba)
            ->with('persona',$personas);
    }

    public function update(Request $request, EntidadesComerciale $entidadesComerciale)
    {
        request()->validate(EntidadesComerciale::$rules);

        $entidadesComerciale->update($request->all());

        return redirect()->route('entidades-comerciale.index')
            ->with('success', 'Entidad actualizada correctamente');
    }

    public function destroy($id)
    {
        $entidadesComerciale = EntidadesComerciale::find($id);
        $entidadesComerciale['borrado'] = 1;
        $entidadesComerciale->save();

        return redirect()->route('entidades-comerciale.index')
            ->with('success', 'EntidadesComerciale deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use App\Models\Persona;
use App\Models\CategoriasComerciale;
use App\Models\EntidadesComerciale;
use App\Models\HabilitacionesComerciale;
use App\Models\LicenciasReba;
use Faker\Provider\Person;
use Illuminate\Http\Request;
use Log;


class VehiculoController extends Controller
{

    public function index()
    {
        $vehiculos = Vehiculo::paginate();

        return view('vehiculo.index', compact('vehiculos'))
            ->with('i', (request()->input('page', 1) - 1) * $vehiculos->perPage());
    }

    public function create()
    {
        $vehiculo = new Vehiculo();
        $persona = Persona::all();

        return view('vehiculo.create', compact('vehiculo'),compact('persona'));
    }


    public function store(Request $request)
    {
        request()->validate(Vehiculo::$rules);

        $vehiculo = Vehiculo::create($request->all());


        return redirect()->route('vehiculo.index')
            ->with('success', 'Vehiculo creado correctamente.');
    }

    public function updateentidadvehiculo(Request $request)
    {   
        $entidad=$request->entidad;
        $vehiculos=$request->vehiculos;

        try
        {
            foreach($vehiculos as $id)
            {
                $vehiculo = Vehiculo::find($id);
                $vehiculo->entidadComercial_id=$entidad;
                $vehiculo->save();
            }
            return response()->json(['success'=>'Operación satisfactoria']);
        }
        catch(Exception $e)
        {
            return response()->json(['error'=>'Se produjo un error inesperado']);
        }
    }

    public function quitarentidadvehiculo(Request $request)
    {   
        $entidad=$request->entidad;
        $vehiculo=$request->vehiculo;

        try
        {
            $vehiculo = Vehiculo::find($vehiculo);
            $vehiculo->entidadComercial_id=null;
            $vehiculo->save();
            return response()->json(['success'=>'Operación satisfactoria']);
        }
        catch(Exception $e)
        {
            return response()->json(['error'=>'Se produjo un error inesperado']);
        }
    }

    public function storefrommodal(Request $request)
    {
        request()->validate(Vehiculo::$rules);
        $vehiculo = Vehiculo::create($request->all());

        $entidadesComerciale = new EntidadesComerciale();
        $vehiculo = new Vehiculo();
        $habilitacionComercial = new HabilitacionesComerciale();
        $licenciasReba = new LicenciasReba();
        $persona = Persona::all();
        $categorias = CategoriasComerciale::all();

        return view('entidades-comerciale.create')
                        ->with('entidadesComerciale',$entidadesComerciale)
                        ->with('vehiculo',$vehiculo)
                        ->with('habilitacionesComerciales',$habilitacionComercial)
                        ->with('licenciasReba',$licenciasReba)
                        ->with('persona',$persona)
                        ->with('categorias',$categorias);
    }

    public function show($id)
    {
        $vehiculo = Vehiculo::find($id);

        return view('vehiculo.show', compact('vehiculo'));
    }

    public function edit($id)
    {
        $vehiculo = Vehiculo::find($id);
        $persona = Persona::all();

        return view('vehiculo.edit', compact('vehiculo'),compact('persona'));
    }

    public function update(Request $request, Vehiculo $vehiculo)
    {
        //request()->validate(Vehiculo::$rules);

        $vehiculo->update($request->all());

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehiculo actualizado correctamente');
    }

    public function destroy($id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo['borrado'] = 1;
        $vehiculo->save();

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehiculo borrado correctamente');
    }

    public function find(Request $request)
    {

        $vehiculos = [];

        if($request->has('q'))
        {
            $vehiculos=Vehiculo::select("id", "marca", "modelo", "dominio")->where('marca', 'LIKE', "%$request->q%")->orWhere('modelo', 'LIKE', "%$request->q%")->orWhere('dominio', 'LIKE', "%$request->q%")->distinct()->get();
        }
        return response()->json($vehiculos);
    }
}

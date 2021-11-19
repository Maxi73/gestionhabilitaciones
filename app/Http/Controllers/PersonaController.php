<?php

namespace App\Http\Controllers;

use App\Models\LibretasSanitaria;
use App\Models\Persona;
use Illuminate\Http\Request;
use Flash;
use Response;
use Validator;


class PersonaController extends Controller
{

    public function index()
    {
        $personas = Persona::paginate();
       // dd($personas);

        return view('persona.index', compact('personas'))
            ->with('i', (request()->input('page', 1) - 1) * $personas->perPage());
    }

    public function create()
    {
        $persona = new Persona();

        $libretasSanitarias = new LibretasSanitaria();

        return view('persona.create', compact('persona'), compact('libretasSanitarias'));
    }

    public function store(Request $request)
    {
        dd($request);
        //request()->validate(Persona::$rules);
        $validator = $this->validarDatos($request);

     /*  if($validator->fails()){
            return redirect(Route('persona.create'))
                ->withErrors($validator->errors())
                ->withInput();
        }else{*/
            $persona = Persona::create($request->all());
           // Flash::success('El Articulo se guardó correctamente.');
            return redirect()->route('persona.index')
                ->with('success', 'Persona creada correctamente.');
    //    }
    }

    public function show($id)
    {
        $persona = Persona::find($id);

        return view('persona.show', compact('persona'));
    }


    public function edit($id)
    {
        $persona = Persona::find($id);

        $libretasSanitarias = LibretasSanitaria::find($persona->id);

        return view('persona.edit', compact('persona'), compact('libretasSanitarias'));
    }

    public function update(Request $request, Persona $persona)
    {
        $validator = $this->validarDatos($request);

       /* if($validator->fails()){
            return redirect(Route('persona.edit'))
                ->withErrors($validator->errors())
                ->withInput();
        }else{*/
            //request()->validate(Persona::$rules);

            $persona->update($request->all());

            return redirect()->route('persona.index')
                ->with('success', 'Persona actualizada correctamente');
      //  }

    }

    public function destroy($id)
    {
        $persona = Persona::find($id);
        $persona['borrado'] = 1;
        $persona->save();

        return redirect()->route('persona.index')
            ->with('success', 'Persona eliminada correctamente');
    }

    //Valida los datos que se ingresan en el formulario
    private function validarDatos(Request $request, $id = null){

        return $validator = Validator::make($request->all(),
            [
                'nombre' => 'required|string',
                'apellido' => 'required|string',
                'tipo' => 'required',
                'dni' => 'required|string',
            ]);
    }
}

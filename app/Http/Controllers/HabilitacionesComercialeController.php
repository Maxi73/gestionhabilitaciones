<?php

namespace App\Http\Controllers;

use App\Models\HabilitacionesComerciale;
use Illuminate\Http\Request;

class HabilitacionesComercialeController extends Controller
{

    public function index()
    {
        $habilitacionesComerciales = HabilitacionesComerciale::paginate();

        return view('habilitaciones-comerciale.index', compact('habilitacionesComerciales'))
            ->with('i', (request()->input('page', 1) - 1) * $habilitacionesComerciales->perPage());
    }

    public function create()
    {
        $habilitacionesComerciales = new HabilitacionesComerciale();
        return view('habilitaciones-comerciale.create', compact('habilitacionesComerciales'));
    }

    public function store(Request $request)
    {
        //request()->validate(HabilitacionesComerciale::$rules);

        $habilitacionesComerciales = HabilitacionesComerciale::create($request->all());

        return redirect()->route('habilitaciones-comerciale.index', compact('habilitacionesComerciales'))
            ->with('habilitacionesComerciales',$habilitacionesComerciales)
            ->with('success', 'HabilitacionesComerciale created successfully.');
    }


    public function show($id)
    {
        $habilitacionesComerciales = HabilitacionesComerciale::find($id);

        return view('habilitaciones-comerciale.show', compact('habilitacionesComerciales'));
    }

    public function edit($id)
    {
        $habilitacionesComerciales = HabilitacionesComerciale::find($id);

        return view('habilitaciones-comerciale.edit', compact('habilitacionesComerciales'));
    }

    public function update(Request $request, HabilitacionesComerciale $habilitacionesComerciale)
    {
        //request()->validate(HabilitacionesComerciale::$rules);

        $habilitacionesComerciale->update($request->all());

        return redirect()->route('habilitaciones-comerciale.index')
            ->with('success', 'HabilitacionesComerciale updated successfully');
    }

    public function destroy($id)
    {
        $habilitacionesComerciale = HabilitacionesComerciale::find($id);
        $habilitacionesComerciale['borrado'] = 1;
        $habilitacionesComerciale->save();

        return redirect()->route('habilitaciones-comerciale.index')
            ->with('success', 'HabilitacionesComerciale deleted successfully');
    }
}

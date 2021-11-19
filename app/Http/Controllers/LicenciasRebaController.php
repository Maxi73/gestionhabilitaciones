<?php

namespace App\Http\Controllers;

use App\Models\LicenciasReba;
use Illuminate\Http\Request;

class LicenciasRebaController extends Controller
{

    public function index()
    {
        $licenciasRebas = LicenciasReba::paginate();

        return view('licencias-reba.index', compact('licenciasRebas'))
            ->with('i', (request()->input('page', 1) - 1) * $licenciasRebas->perPage());
    }

    public function create()
    {
        $licenciasReba = new LicenciasReba();
        return view('licencias-reba.create', compact('licenciasReba'));
    }


    public function store(Request $request)
    {
        request()->validate(LicenciasReba::$rules);

        $licenciasReba = LicenciasReba::create($request->all());

        return redirect()->route('licencias-rebas.index')
            ->with('success', 'LicenciasReba created successfully.');
    }

    public function show($id)
    {
        $licenciasReba = LicenciasReba::find($id);

        return view('licencias-reba.show', compact('licenciasReba'));
    }

    public function edit($id)
    {
        $licenciasReba = LicenciasReba::find($id);

        return view('licencias-reba.edit', compact('licenciasReba'));
    }


    public function update(Request $request, LicenciasReba $licenciasReba)
    {
        request()->validate(LicenciasReba::$rules);

        $licenciasReba->update($request->all());

        return redirect()->route('licencias-rebas.index')
            ->with('success', 'LicenciasReba updated successfully');
    }

    public function destroy($id)
    {
        $licenciasReba = LicenciasReba::find($id);
        $licenciasReba['borrado'] = 1;
        $licenciasReba->save();

        return redirect()->route('licencias-rebas.index')
            ->with('success', 'LicenciasReba deleted successfully');
    }
}

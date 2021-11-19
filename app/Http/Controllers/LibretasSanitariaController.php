<?php

namespace App\Http\Controllers;

use App\Models\LibretasSanitaria;
use Illuminate\Http\Request;

class LibretasSanitariaController extends Controller
{

    public function index()
    {
        $libretasSanitarias = LibretasSanitaria::paginate();

        return view('libretas-sanitaria.index', compact('libretasSanitarias'))
            ->with('i', (request()->input('page', 1) - 1) * $libretasSanitarias->perPage());
    }

    public function create()
    {
        $libretasSanitarias = new LibretasSanitaria();
        dd("llega aca");
        return view('libretas-sanitaria.create', compact('libretasSanitarias'));
    }

    public function store(Request $request)
    {
        request()->validate(LibretasSanitaria::$rules);

        $libretasSanitarias = LibretasSanitaria::create($request->all());

        return redirect()->route('libretas-sanitaria.index')
            ->with('success', 'LibretasSanitaria created successfully.');
    }

    public function show($id)
    {
        $libretasSanitarias = LibretasSanitaria::find($id);

        return view('libretas-sanitaria.show', compact('libretasSanitarias'));
    }

    public function edit($id)
    {
        $libretasSanitarias = LibretasSanitaria::find($id);

        return view('libretas-sanitaria.edit', compact('libretasSanitarias'));
    }

    public function update(Request $request, LibretasSanitaria $libretasSanitarias)
    {
        request()->validate(LibretasSanitaria::$rules);

        $libretasSanitarias->update($request->all());

        return redirect()->route('libretas-sanitarias.index')
            ->with('success', 'LibretasSanitaria updated successfully');
    }

    public function destroy($id)
    {
        $libretasSanitarias = LibretasSanitaria::find($id);
        $libretasSanitarias['borrado'] = 1;
        $libretasSanitarias->save();

        return redirect()->route('libretas-sanitarias.index')
            ->with('success', 'LibretasSanitaria deleted successfully');
    }
}

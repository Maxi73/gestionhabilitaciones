<?php

namespace App\Http\Controllers;

use App\Models\CategoriasComerciale;
use Illuminate\Http\Request;


class CategoriasComercialeController extends Controller
{

    public function index()
    {
        $categoriasComerciales = CategoriasComerciale::paginate();

        return view('categorias-comerciale.index', compact('categoriasComerciales'))
            ->with('i', (request()->input('page', 1) - 1) * $categoriasComerciales->perPage());
    }

    public function create()
    {
        $categoriasComerciale = new CategoriasComerciale();
        return view('categorias-comerciale.create', compact('categoriasComerciale'));
    }


    public function store(Request $request)
    {
        request()->validate(CategoriasComerciale::$rules);

        $categoriasComerciale = CategoriasComerciale::create($request->all());

        return redirect()->route('categorias-comerciales.index')
            ->with('success', 'CategoriasComerciale created successfully.');
    }


    public function show($id)
    {
        $categoriasComerciale = CategoriasComerciale::find($id);

        return view('categorias-comerciale.show', compact('categoriasComerciale'));
    }

    public function edit($id)
    {
        $categoriasComerciale = CategoriasComerciale::find($id);

        return view('categorias-comerciale.edit', compact('categoriasComerciale'));
    }

    public function update(Request $request, CategoriasComerciale $categoriasComerciale)
    {
        request()->validate(CategoriasComerciale::$rules);

        $categoriasComerciale->update($request->all());

        return redirect()->route('categorias-comerciales.index')
            ->with('success', 'CategoriasComerciale updated successfully');
    }

    public function destroy($id)
    {
        $categoriasComerciale = CategoriasComerciale::find($id);
        $categoriasComerciale['borrado'] = 1;
        $categoriasComerciale->save();

        return redirect()->route('categorias-comerciales.index')
            ->with('success', 'CategoriasComerciale deleted successfully');
    }
}

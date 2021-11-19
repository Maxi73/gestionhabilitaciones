@extends('layouts.app')

@section('template_title')
    {{ $categoriasComerciale->name ?? 'Show Categorias Comerciale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Categorias Comerciale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categorias-comerciales.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $categoriasComerciale->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

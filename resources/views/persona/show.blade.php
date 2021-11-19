@extends('adminlte::page')

@section('title', 'Mostrar Persona')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Persona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('persona.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-3">
                                <strong>Apellido:</strong>
                                {{ $persona->apellido }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Nombre:</strong>
                                {{ $persona->nombre }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Documento:</strong>
                                {{ $persona->documento }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Fecha Nacimiento:</strong>
                                {{ $persona->fechaNacimiento }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Tipo:</strong>
                                {{ $persona->tipo }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Documento Temporal:</strong>
                                {{ $persona->documentoTemporal }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Telefono prefijo:</strong>
                                {{ $persona->telefonoPrefijo }}
                            </div>
                            <div class="form-group">
                                <strong>Telefono:</strong>
                                {{ $persona->telefono }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Movil prefijo:</strong>
                                {{ $persona->movilPrefijo }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Movil:</strong>
                                {{ $persona->movil }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Direccion:</strong>
                                {{ $persona->direccion }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Barrio:</strong>
                                {{ $persona->barrio }}
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

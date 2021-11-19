@extends('adminlte::page')

@section('title', 'Entidad Comercial')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Entidad Comercial</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('entidadesComerciales.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-3">
                                <strong>Nombre:</strong>
                                {{ $entidadesComerciale->nombre }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Domicilio:</strong>
                                {{ $entidadesComerciale->domicilio }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Legajo:</strong>
                                {{ $entidadesComerciale->legajo }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Expediente:</strong>
                                {{ $entidadesComerciale->expediente }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Rubro:</strong>
                                {{ $entidadesComerciale->rubro }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Tipo:</strong>
                                {{ $entidadesComerciale->tipo }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Parada:</strong>
                                {{ $entidadesComerciale->parada }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Partida:</strong>
                                {{ $entidadesComerciale->partida }}
                            </div>
                         

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('adminlte::page')

@section('title', 'Vehículo')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Vehiculo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vehiculo.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-3">
                                <strong>Marca:</strong>
                                {{ $vehiculo->marca }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Modelo:</strong>
                                {{ $vehiculo->modelo }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Dominio:</strong>
                                {{ $vehiculo->dominio }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Fecha Venc. Seguro:</strong>
                                {{ $vehiculo->fechaVencimientoSeguro }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Fecha Venc. VTV:</strong>
                                {{ $vehiculo->fechaVencimientoVtv }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Fecha  Venc. Licencia:</strong>
                                {{ $vehiculo->fechaVencimientoLicencia }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Titular Id:</strong>
                                {{ $vehiculo->titular_id }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Chofer Id:</strong>
                                {{ $vehiculo->chofer_id }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Vehiculocontratado:</strong>
                                {{ $vehiculo->vehiculoContratado }}
                            </div>
                            <div class="form-group col-3">
                                <strong>Entidadcomercial Id:</strong>
                                {{ $vehiculo->entidadComercial_id }}
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

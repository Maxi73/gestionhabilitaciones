@extends('adminlte::page')

@section('title', 'Entidad Comercial')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles de entidad comercial</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('entidadesComerciales.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="alert alert-info col-12">
                                <strong>Nombre:</strong> {{ $entidadesComerciale->nombre }}<br>
                                <strong>Domicilio:</strong> {{ $entidadesComerciale->domicilio }}<br>
                                <strong>Legajo:</strong> {{ $entidadesComerciale->legajo }}<br>
                                <strong>Expediente:</strong> {{ $entidadesComerciale->expediente }}<br>
                                <strong>Rubro:</strong> {{ $entidadesComerciale->rubro }}<br>
                                <strong>Tipo:</strong> {{ $entidadesComerciale->tipo }}<br>
                                <strong>Parada:</strong> {{ $entidadesComerciale->parada }}<br>
                                <strong>Partida:</strong> {{ $entidadesComerciale->partida }}<br>
                            </div>
                        </div>
                        @if($entidadesComerciale->tipo == "remiseria")
                            <hr>
                            <div class="row">
                                <h6><label style="color:#288EC8;"><i class="fa fa-car" aria-hidden="true"></i>  Vehículos asociados<label></h6>
                                <div class="table-responsive">
                                    @if(count($vehiculosAsociados) > 0)
                                        <table id="tabla_autos" class="table table-striped table-hover">
                                            <thead class="thead">
                                                <tr bgcolor="#288EC8">
                                                    <th style="color:white;">Marca</th>
                                                    <th style="color:white;">Modelo</th>
                                                    <th style="color:white;">Dominio</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($vehiculosAsociados as $vehiculoAsociado)
                                                    <tr id={{$vehiculoAsociado->id}}>
                                                        <td style="color:dimgray;">{{ $vehiculoAsociado->marca }}</td>
                                                        <td style="color:dimgray;">{{ $vehiculoAsociado->modelo }}</td>
                                                        <td style="color:dimgray;">{{ $vehiculoAsociado->dominio }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <a href="{{ route('entidadesComerciales.edit',$entidadesComerciale->id) }}">+Agregar</a>
                                    @else
                                        <h6><label style="color:orange;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  Sin vehículos asociados <label></h6><a href="{{ route('entidadesComerciales.edit',$entidadesComerciale->id) }}">+Agregar</a>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>INICIO</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title"><b>
                                {{ __('Vehículos - VTV VENCIDAS') }}
                            </b></span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table id="tabla" class="table table-striped table-hover">
                        <thead class="thead">
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Dominio</th>
                            <th>Venc. seg.</th>
                            <th>Venc. VTV</th>
                            <th>Venc. lic.</th>
                            <th>Titular</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($vtvVencidas as $vtv)
                            <tr>
                                <td>{{ $vtv->marca }}</td>
                                <td>{{ $vtv->modelo }}</td>
                                <td>{{ $vtv->dominio }}</td>
                                <td>{{ date('d-m-Y', strtotime($vtv->fechaVencimientoSeguro))  }}</td>
                                <td><b>{{ date('d-m-Y', strtotime($vtv->fechaVencimientoVtv ))}}</b></td>
                                <td>{{ date('d-m-Y', strtotime($vtv->fechaVencimientoLicencia ))}}</td>
                                <td>{{ $vtv->titular_id }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title"><b>
                                {{ __('Vehículos - SEGUROS VENCIDOS') }}
                            </b></span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table id="tabla1" class="table table-striped table-hover">
                        <thead class="thead">
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Dominio</th>
                            <th>Venc. seg.</th>
                            <th>Venc. VTV</th>
                            <th>Venc. lic.</th>
                            <th>Titular</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($segurosVencidos as $seg)
                            <tr>
                                <td>{{ $seg->marca }}</td>
                                <td>{{ $seg->modelo }}</td>
                                <td>{{ $seg->dominio }}</td>
                                <td><b>{{ date('d-m-Y', strtotime($seg->fechaVencimientoSeguro)) }} </b></td>
                                <td>{{ date('d-m-Y', strtotime($seg->fechaVencimientoVtv ))}}</td>
                                <td>{{ date('d-m-Y', strtotime($seg->fechaVencimientoLicencia ))}}</td>
                                <td>{{ $seg->titular_id }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title"><b>
                                {{ __('Vehículos - LICENCIAS VENCIDAS') }}
                            </b></span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table id="tabla2" class="table table-striped table-hover">
                        <thead class="thead">
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Dominio</th>
                            <th>Venc. seg.</th>
                            <th>Venc. VTV</th>
                            <th>Venc. lic.</th>
                            <th>Titular</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($licenciasVencidas as $lic)
                            <tr>
                                <td>{{ $lic->marca }}</td>
                                <td>{{ $lic->modelo }}</td>
                                <td>{{ $lic->dominio }}</td>
                                <td>{{ date('d-m-Y', strtotime($lic->fechaVencimientoSeguro))  }}</td>
                                <td>{{ date('d-m-Y', strtotime($lic->fechaVencimientoVtv ))}}</td>
                                <td><b>{{ date('d-m-Y', strtotime($lic->fechaVencimientoLicencia ))}}</b></td>
                                <td>{{ $lic->titular_id }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#tabla').DataTable();
        } );

        $(document).ready(function() {
            $('#tabla1').DataTable();
        } );

        $(document).ready(function() {
            $('#tabla2').DataTable();
        } );
    </script>
@stop

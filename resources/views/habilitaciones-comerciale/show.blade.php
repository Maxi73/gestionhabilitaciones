@extends('adminlte::page')

@section('title', 'Mostrar Habilitacion')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Habilitaciones Comerciale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('habilitacionesComerciales.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $habilitacionesComerciale->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Fechainicio:</strong>
                            {{ $habilitacionesComerciale->fechaInicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fechavencimiento:</strong>
                            {{ $habilitacionesComerciale->fechaVencimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $habilitacionesComerciale->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

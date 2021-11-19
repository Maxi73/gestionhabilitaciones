@extends('adminlte::page')

@section('title', 'Mostrar licencia')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Licencias Reba</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('licenciasRebas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $licenciasReba->categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaotorgamiento:</strong>
                            {{ $licenciasReba->fechaOtorgamiento }}
                        </div>
                        <div class="form-group">
                            <strong>Fechavencimiento:</strong>
                            {{ $licenciasReba->fechaVencimiento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

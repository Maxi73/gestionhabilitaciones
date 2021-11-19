@extends('adminlte::page')

@section('title', 'Libreta Sanitaria')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Libretas Sanitaria</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libretasSanitarias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Fechavencimiento:</strong>
                            {{ $libretasSanitaria->fechaVencimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Medicofirmante:</strong>
                            {{ $libretasSanitaria->medicoFirmante }}
                        </div>
                        <div class="form-group">
                            <strong>Persona Id:</strong>
                            {{ $libretasSanitaria->persona_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

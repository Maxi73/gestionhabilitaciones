@extends('adminlte::page')

@section('title', 'Crear Licencia Reba')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Licencias Reba</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('licenciasReba.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('licencias-reba.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

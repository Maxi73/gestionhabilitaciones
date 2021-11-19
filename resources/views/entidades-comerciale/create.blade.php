@extends('adminlte::page')

@section('title', 'Nuevo Comercio')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Nueva Entidad Comercial</span>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('entidadesComerciales.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('entidades-comerciale.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

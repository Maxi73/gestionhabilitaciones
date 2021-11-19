@extends('adminlte::page')

@section('title', 'Nuevo Vehículo')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Nuevo Vehiculo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('vehiculo.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('vehiculo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

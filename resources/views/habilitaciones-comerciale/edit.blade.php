@extends('adminlte::page')

@section('title', 'Editar Habilitacion')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Habilitaciones Comerciale</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('habilitacionesComerciales.update', $habilitacionesComerciale->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('habilitaciones-comerciale.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

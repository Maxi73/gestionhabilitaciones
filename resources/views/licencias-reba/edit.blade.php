@extends('adminlte::page')

@section('title', 'Actualizar Licencias Reba')


@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Licencias Reba</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('licenciasReba.update', $licenciasReba->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('licencias-reba.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

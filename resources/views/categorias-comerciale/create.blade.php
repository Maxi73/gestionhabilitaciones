@extends('layouts.app')

@section('template_title')
    Create Categorias Comerciale
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Categorias Comerciale</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categorias-comerciales.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('categorias-comerciale.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

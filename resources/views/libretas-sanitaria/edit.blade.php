@extends('layouts.app')

@section('template_title')
    Update Libretas Sanitaria
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Libretas Sanitaria</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('libretasSanitarias.update', $libretasSanitaria->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('libretas-sanitaria.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

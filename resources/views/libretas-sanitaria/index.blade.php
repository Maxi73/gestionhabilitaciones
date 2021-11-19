@extends('adminlte::page')

@section('title', 'Cargar Libreta Sanitaria')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Libretas Sanitaria') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('libretasSanitarias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Fechavencimiento</th>
										<th>Medicofirmante</th>
										<th>Persona Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($libretasSanitarias as $libretasSanitaria)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $libretasSanitaria->fechaVencimiento }}</td>
											<td>{{ $libretasSanitaria->medicoFirmante }}</td>
											<td>{{ $libretasSanitaria->persona_id }}</td>

                                            <td>
                                                <form action="{{ route('libretasSanitarias.destroy',$libretasSanitaria->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('libretasSanitarias.show',$libretasSanitaria->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('libretasSanitarias.edit',$libretasSanitaria->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $libretasSanitarias->links() !!}
            </div>
        </div>
    </div>
@endsection

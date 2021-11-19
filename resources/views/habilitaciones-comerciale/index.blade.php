@extends('adminlte::page')

@section('title', 'Habilitaciones Comerciales')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Habilitaciones Comerciale') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('habilitacionesComerciales.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Tipo</th>
										<th>Fechainicio</th>
										<th>Fechavencimiento</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($habilitacionesComerciales as $habilitacionesComerciale)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $habilitacionesComerciale->tipo }}</td>
											<td>{{ $habilitacionesComerciale->fechaInicio }}</td>
											<td>{{ $habilitacionesComerciale->fechaVencimiento }}</td>
											<td>{{ $habilitacionesComerciale->estado }}</td>

                                            <td>
                                                <form action="{{ route('habilitaciones-comerciales.destroy',$habilitacionesComerciale->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('habilitacionesComerciales.show',$habilitacionesComerciale->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('habilitacionesComerciales.edit',$habilitacionesComerciale->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $habilitacionesComerciales->links() !!}
            </div>
        </div>
    </div>
@endsection

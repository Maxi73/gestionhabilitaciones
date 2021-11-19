@extends('adminlte::page')

@section('title', 'Licencias Reba')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Licencias Reba') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('licenciasReba.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Categoria</th>
										<th>Fechaotorgamiento</th>
										<th>Fechavencimiento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($licenciasRebas as $licenciasReba)
                                        <tr>
											<td>{{ $licenciasReba->categoria }}</td>
											<td>{{ $licenciasReba->fechaOtorgamiento }}</td>
											<td>{{ $licenciasReba->fechaVencimiento }}</td>

                                            <td>
                                                <form action="{{ route('licencias-rebas.destroy',$licenciasReba->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('licenciasReba.show',$licenciasReba->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('licenciasReba.edit',$licenciasReba->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $licenciasRebas->links() !!}
            </div>
        </div>
    </div>
@endsection

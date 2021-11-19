<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<style type="text/css">
    .select2 {
width:100%!important;
}
</style>
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row" >
            <div class="form-group col-3">
                {{ Form::label('tipo') }}
                <select id="tipo" name="tipo" class="form-control" value="{{$entidadesComerciale->tipo}}" onchange="mostrar(this.value)">
                    <option value="#">Seleccione una opcion</option>
                    <option value="comercio">COMERCIO</option>
                    <option value="remiseria">REMISERIA</option>
                    <option value="taxi">TAXI</option>
                </select>
            </div>
        </div>

        <div class="row" >

            <div class="form-group col-3" id="nombre" style="display: none;">
                {{ Form::label('Nombre') }}
                {{ Form::text('nombre', $entidadesComerciale->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            </div>

            <div class="form-group col-3" id="legajo" style="display: none;">
                {{ Form::label('Legajo') }}
                {{ Form::text('legajo', $entidadesComerciale->legajo, ['class' => 'form-control' . ($errors->has('legajo') ? ' is-invalid' : ''), 'placeholder' => 'Legajo']) }}
            </div>

            <div class="form-group col-3" id="expediente" style="display: none;">
                {{ Form::label('Expediente') }}
                {{ Form::text('expediente', $entidadesComerciale->expediente, ['class' => 'form-control' . ($errors->has('expediente') ? ' is-invalid' : ''), 'placeholder' => 'Expediente']) }}
            </div>

            <div class="form-group col-3" id="rubro" style="display: none;">
                {{ Form::label('Rubro') }}
                {{ Form::text('rubro', $entidadesComerciale->rubro, ['class' => 'form-control' . ($errors->has('rubro') ? ' is-invalid' : ''), 'placeholder' => 'Rubro']) }}
            </div>

            <div class="form-group col-3" id="domicilio" style="display: none;">
                {{ Form::label('Domicilio') }}
                {{ Form::text('domicilio', $entidadesComerciale->domicilio, ['class' => 'form-control' . ($errors->has('domicilio') ? ' is-invalid' : ''), 'placeholder' => 'Domicilio']) }}
            </div>

            <div class="form-group col-3" id="parada" style="display: none;">
                {{ Form::label('parada') }}
                {{ Form::text('parada', $entidadesComerciale->parada, ['class' => 'form-control' . ($errors->has('parada') ? ' is-invalid' : ''), 'placeholder' => 'Parada']) }}
            </div>


            <div class="form-group col-2" id="partida" style="display: none;">
                {{ Form::label('Partida') }}
                {{ Form::text('partida', $entidadesComerciale->partida, ['class' => 'form-control' . ($errors->has('partida') ? ' is-invalid' : ''), 'placeholder' => 'Partida']) }}
            </div>


            <div class="form-group col-2" id="tipoHab" style="display: none;">
                {{ Form::label('Tipo Hab.') }}
                <select class="form-control" name="tipoHab" id="tipoHab">
                    <option value=""> Seleccionar </option>
                    <option value="1"> Definitivo </option>
                    <option value="0"> Transitorio </option>
                </select>
            </div>


            <div class="form-group col-3" id="chofer" style="display: none;">
                {{ Form::label('Chofer') }}
                <select class="form-control" name="chofer_id" id="chofer_id">
                    @foreach($persona as $chofer)
                        <option value="{{$chofer['id']}}"> {{$chofer['apellido']}}, {{$chofer['nombre']}} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-2" id="categoriasComerciales" style="display: none;">
                {{ Form::label('Cat. Comercial') }}
                <select class="form-control" name="categoriasComerciales" id="categoriasComerciales">
                        @foreach($categorias as $cc)
                            <option value="{{$cc['id']}}"> {{$cc['nombre']}} </option>
                        @endforeach
                </select>
            </div>


        </div>


    </div>
</div>

    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
  <!--if($entidadesComerciale->id && $entidadesComerciale->tipo == 'comercio')-->
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalTitular">Cargar Titular/es</button>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalReba">Licencia REBA</button>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalComercial">Habilitacion Com.</button>
        <!-- endif
        if($entidadesComerciale->id && ($entidadesComerciale->tipo == 'taxi' || $entidadesComerciale->tipo == 'remiseria'))-->
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalVehiculo">Cargar Vehiculo</button>
        <!--endif-->

    </div>
    </div>

</div>


<!-- Modals -->
<div id="modalReba" class="modal" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cargar Licencia REBA</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('licenciasReba.store') }}"  role="form" enctype="multipart/form-data">
                    @csrf
                    @include('licencias-reba.form')
                </form>
            </div>
        </div>
    </div>
</div>

<div id="modalTitular" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Nuevo Titular</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<div id="modalComercial" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cargar Habilitacion Comercial</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('habilitacionesComerciales.store') }}"  role="form" enctype="multipart/form-data">
                    @csrf

                    @include('habilitaciones-comerciale.form')

                </form>
            </div>

        </div>

    </div>
</div>

<div id="modalVehiculo" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Vehículos</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <!--Buscador-->
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <select class="livesearch form-control" id="selectvehiculo" name="selectvehiculo" required></select>
                    </div>
                    <div class="col-sm-1 col-md-1 col-lg-1" style="margin-top:10px;">
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#modalAgregarVehiculo" style="margin-left:15px;"><i class="fa fa-plus" style="color: green" title="Agregar nuevo vehículo"></i></a>
                    </div>
                </div>
                <!--Tabla-->
                <div class="card-body">
                    <div class="table-responsive">
                        @if($vehiculosAsociados)
                            <table id="tabla_autos" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Marca</th>
                                        <th>Modelo</th>
                                        <th>Dominio</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vehiculosAsociados as $vehiculoAsociado)
                                        <tr id={{$vehiculoAsociado->id}}>
                                            <td>{{ $vehiculoAsociado->marca }}</td>
                                            <td>{{ $vehiculoAsociado->modelo }}</td>
                                            <td>{{ $vehiculoAsociado->dominio }}</td>
                                            <td><a href="#" onclick="deleteTr({{$vehiculoAsociado->id}},true)"><i class="fa fa-fw fa-trash" style=" color:red" title="Quitar de la selección"></i></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <h6><label style="color:orange;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  Sin vehículos asociados<label></h6>
                        @endif
                    </div>
                </div>
                <hr>
                <div>
                    <button class="btn btn-success btn-sm" id="btn_guardar" style="float: right;">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <input type="text" hidden id="id_entidad" value="{{$entidadesComerciale->id}}">
    <input type="text" hidden id="csrf" value="{{ csrf_token()}}">
</div>

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script type="text/javascript">
{
    var automoviles=[];
    var data = '<?php echo json_encode($vehiculosAsociados); ?>';
 
    if(data.length > 0)
    {
        $.each(JSON.parse(data), function(i, item) 
        {
            automoviles.push(parseInt(item['id']));
        });    
    }

    $('.livesearch').select2(
    {
        placeholder: 'Seleccionar vehículo',
        language:
        {
            "noResults": function(){return "Sin resultados";},
            "searching": function(){return "Buscando...";},
        },
        escapeMarkup: function(markup) 
        {
            return markup;
        },
        ajax: 
        {
            url: 'http://localhost/www/gestionhabilitaciones/public/buscarvehiculo',
            dataType: 'json',
            delay: 250,
            processResults: function (data) 
            {
                return{results: $.map(data, function (item){return{text: item.marca+" "+item.modelo+" ("+item.dominio+")",id: item.id}})};
            },
            cache: true
        }
    });
    $('#selectvehiculo').focus();

    $('.livesearch').on('change',function(e)
    {
        console.log(automoviles.includes(automovil))
        var automovil=$('#selectvehiculo').val();

        if(automoviles.includes(automovil))
        {
            toastr.options.timeOut = 2000; // 2s
            toastr.warning('El vehículo ya fue agregado al listado');
        }
        else
        {
            automoviles.push(automovil);
            console.log("Vehiculos: "+automoviles);
            //Armo el tr
            var string=$('#selectvehiculo').text().split(" ");
            var tr="<tr id="+$('#selectvehiculo').val()+"><td>"+string[0]+"</td><td>"+string[1]+"</td><td>"+string[2]+"</td><td><a href='#' onclick='deleteTr("+$('#selectvehiculo').val()+",false)'><i class='fa fa-fw fa-trash' style='color:red' title='Quitar de la selección'></i></a></td></tr>";
            $("#tabla_autos tr:last").after(tr); 
            $('#selectvehiculo').text("");
            $('#selectvehiculo').focus();
        }
        
    });

    function actualizar()
    {
        window.location.reload(true);
    }

    $('#btn_guardar').on('click',function(e)
    {
        if(automoviles.length == 0)
        {
            toastr.options.timeOut = 2000; // 2s
            toastr.warning('Debe seleccionar al menos un vehículo');
        }
        else
        {
            console.log("Automoviles: "+automoviles);
            console.log("Entidad: "+$("#id_entidad").val());
            $.ajax(
            {
                url: "http://localhost/www/gestionhabilitaciones/public/updateentidadvehiculo",
                type: "POST",
                dataType: 'JSON',
                data: 
                {
                      _token: $("#csrf").val(),
                      vehiculos: automoviles,
                      entidad: $("#id_entidad").val()
                },
                cache: false,
                success: function(result)
                {
                    toastr.options.timeOut = 2000; // 2s
                    toastr.success(result.success);
                    $("#modalVehiculo").modal('toggle');
                    setInterval("actualizar()",3000);
                    //window.setTimeout(window.location.reload(),9000);
                },
                error: function(result)
                {
                    toastr.options.timeOut = 2000; // 2s
                    toastr.danger(result.error);
                    $("#modalVehiculo").modal('toggle');
                }
            });
        }
    });
}



function deleteTr(id,update)
{
    if(update)
    {
        $.ajax(
            {
                url: "http://localhost/www/gestionhabilitaciones/public/quitarentidadvehiculo",
                type: "POST",
                dataType: 'JSON',
                data: 
                {
                      _token: $("#csrf").val(),
                      vehiculo: id,
                      entidad: $("#id_entidad").val()
                },
                cache: false,
                success: function(result)
                {
                    console.log("Vehiculo quitado")
                },
                error: function(result)
                {
                    toastr.options.timeOut = 2000; // 2s
                    toastr.danger(result.error);
                    $("#modalVehiculo").modal('toggle');
                }
            });
    }

    $("#"+id).remove();
    var indice = automoviles.indexOf(id);
    automoviles.splice(indice, 1);
}

function mostrar(id)
{
    if (id == "taxi") 
    {
            $("#nombre").hide();
            $("#legajo").show();
            $("#expediente").show();
            $("#rubro").show();
            $("#domicilio").hide();
            $("#parada").show();
            $("#fechaInicio").show();
            $("#partida").hide();
            $("#fechaVencimiento").hide();
            $("#tipoHab").hide();
            $("#vencimientoVtv").show();
            $("#vencimientoLicencia").show();
            $("#vencimientoSeguro").show();
            $("#chofer").show();
            $("#dominio").show();
        //    $("#vehiculoContratado").show();
            $("#marca").show();
            $("#modelo").show();
           // $("#modalTitular").hide();
            $("#categoriasComerciales").hide();

    }

    if (id == "comercio") 
    {
            $("#nombre").show();
            $("#legajo").show();
            $("#expediente").show();
            $("#rubro").show();
            $("#domicilio").show();
            $("#parada").hide();
            $("#fechaInicio").show();
            $("#partida").show();
            $("#fechaVencimiento").show();
            $("#tipoHab").show();
            $("#vencimientoVtv").hide();
            $("#vencimientoLicencia").hide();
            $("#vencimientoSeguro").hide();
            $("#chofer").hide();
            $("#dominio").hide();
           // $("#vehiculoContratado").hide();
           // $("#modalTitular").show();
            $("#categoriasComerciales").show();

    }

    if (id == "remiseria") 
    {
            $("#nombre").show();
            $("#legajo").show();
            $("#expediente").show();
            $("#rubro").show();
            $("#domicilio").show();
            $("#parada").show();
            $("#fechaInicio").show();
            $("#partida").hide();
            $("#fechaVencimiento").hide();
            $("#tipoHab").hide();
            $("#vencimientoVtv").hide();
            $("#vencimientoLicencia").hide();
            $("#vencimientoSeguro").hide();
            $("#chofer").hide();
            $("#dominio").hide();
         //   $("#vehiculoContratado").hide();
         //   $("#modalTitular").hide();
            $("#categoriasComerciales").hide();

    }
}
</script>
@stop



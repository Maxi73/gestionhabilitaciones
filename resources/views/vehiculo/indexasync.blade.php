<div class="container "id="indexasync">
    <div class="row">
        <div class="col-md-7">
            <select class="livesearch form-control" id="selectvehiculo" name="selectvehiculo" required></select>
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modalAgregarVehiculo" style="margin-left:15px;"><i class="fa fa-plus"></i></a>
        </div>
    </div>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive"></div>
        </div>
    </div>
</div>
@section('js')
<script type="text/javascript">
{
    $('.livesearch').select2({
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
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.marca+"-"+item.modelo+" ("+item.dominio+")",
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });

    $('.livesearch').on('change',function()
    {
        var automovil=$('#selectvehiculo').val()
        var entidad=1; //Remiseria
    });
}
</script>
@stop

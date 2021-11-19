<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="form-group col-3">
                {{ Form::label('Categoria') }}
                {{ Form::text('categoria', $licenciasReba->categoria, ['class' => 'form-control' . ($errors->has('categoria') ? ' is-invalid' : ''), 'placeholder' => 'Categoria']) }}
                {!! $errors->first('categoria', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-3">
                {{ Form::label('Fecha Otorgamiento') }}
                {{ Form::date('fechaOtorgamiento', $licenciasReba->fechaOtorgamiento, ['class' => 'form-control' . ($errors->has('fechaOtorgamiento') ? ' is-invalid' : ''), 'placeholder' => 'Fechaotorgamiento']) }}
                {!! $errors->first('fechaOtorgamiento', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group col-3">
                {{ Form::label('Fecha Vencimiento') }}
                {{ Form::date('fechaVencimiento', $licenciasReba->fechaVencimiento, ['class' => 'form-control' . ($errors->has('fechaVencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fechavencimiento']) }}
                {!! $errors->first('fechaVencimiento', '<div class="invalid-feedback">:message</p>') !!}
            </div>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>

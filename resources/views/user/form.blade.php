<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('shop_admin') }}
            {{ Form::select('shop_admin', [ 0 => 'Falso', 1 => 'Verdadeiro' ], null, ['class' => 'form-control' . ($errors->has('shop_admin') ? ' is-invalid' : '')]) }}
            {!! $errors->first('shop_admin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('shops_id') }}
            {{ Form::number('shops_id', $user->shops_id, ['class' => 'form-control' . ($errors->has('shops_id') ? ' is-invalid' : ''), 'placeholder' => 'Shops Id']) }}
            {!! $errors->first('shops_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('active') }}
            {{ Form::select('active', [ 0 => 'Falso', 1 => 'Verdadeiro' ], null, ['class' => 'form-control' . ($errors->has('active') ? ' is-invalid' : '')]) }}
            {!! $errors->first('active', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('admin') }}
            {{ Form::select('admin', [ 0 => 'Falso', 1 => 'Verdadeiro' ], null, ['class' => 'form-control' . ($errors->has('admin') ? ' is-invalid' : '')]) }}
            {!! $errors->first('admin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('photo') }}
            {{ Form::text('photo', $user->photo, ['class' => 'form-control' . ($errors->has('photo') ? ' is-invalid' : ''), 'placeholder' => 'Photo']) }}
            {!! $errors->first('photo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </div>
</div>
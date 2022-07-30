@extends('web.templates.templateBase')

@section('conteudo')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                    </div>
                </div>

                <div class="card-body">
                    
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
                            <strong>Name:</strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>
                        <div class="form-group">
                            <strong>Photo:</strong>
                            {{ $user->photo }}
                        </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@extends('web.templates.templateBase')

@section('conteudo')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">Exibir Shop</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('shops.index') }}"> Back</a>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>ID:</strong>
                        {{ $shop->shops_id }}
                    </div>
                    <div class="form-group">
                        <strong>Ativo?</strong>
                        {{ $shop->active ? 'SIM' : 'NÃO' }}
                    </div>
                    <div class="form-group">
                        <strong>Endereço:</strong>
                        {{ $shop->address }}
                    </div>
                    <div class="form-group">
                        <strong>Telefone:</strong>
                        {{ $shop->telefone }}
                    </div>
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $shop->email }}
                    </div>
                    <div class="form-group">
                        <strong>Whatsapp:</strong>
                        {{ $shop->whatsapp }}
                    </div>
                    <div class="form-group">
                        <strong>Whatsapp Link:</strong>
                        {{ $shop->whatsapp_link }}
                    </div>
                    <div class="form-group">
                        <strong>Instagram Link:</strong>
                        {{ $shop->instagram_link }}
                    </div>
                    <div class="form-group">
                        <strong>Facebook Link:</strong>
                        {{ $shop->facebook_link }}
                    </div>
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $shop->name }}
                    </div>
                    <div class="form-group">
                        <strong>Url:</strong>
                        {{ $shop->url }}
                    </div>
                    <div class="form-group">
                        <strong>Cnpj:</strong>
                        {{ $shop->cnpj }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('description') }}
                        {{ Form::text('description', $shop->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
                        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

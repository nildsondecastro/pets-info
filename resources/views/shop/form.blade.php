<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ativo?') }}
            {{ Form::select('active', [ 0 => 'Falso', 1 => 'Verdadeiro' ], null, ['class' => 'form-control' . ($errors->has('active') ? ' is-invalid' : '')]) }}
            {!! $errors->first('active', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('endereço') }}
            {{ Form::text('address', $shop->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefone') }}
            {{ Form::text('telefone', $shop->telefone, ['class' => 'form-control' . ($errors->has('telefone') ? ' is-invalid' : ''), 'placeholder' => 'Telefone']) }}
            {!! $errors->first('telefone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $shop->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('whatsapp') }}
            {{ Form::text('whatsapp', $shop->whatsapp, ['class' => 'form-control' . ($errors->has('whatsapp') ? ' is-invalid' : ''), 'placeholder' => 'Whatsapp']) }}
            {!! $errors->first('whatsapp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('whatsapp_link') }}
            {{ Form::text('whatsapp_link', $shop->whatsapp_link, ['class' => 'form-control' . ($errors->has('whatsapp_link') ? ' is-invalid' : ''), 'placeholder' => 'Whatsapp Link']) }}
            {!! $errors->first('whatsapp_link', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('instagram') }}
            {{ Form::text('instagram_link', $shop->instagram_link, ['class' => 'form-control' . ($errors->has('instagram_link') ? ' is-invalid' : ''), 'placeholder' => 'Instagram Link']) }}
            {!! $errors->first('instagram_link', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('facebook') }}
            {{ Form::text('facebook_link', $shop->facebook_link, ['class' => 'form-control' . ($errors->has('facebook_link') ? ' is-invalid' : ''), 'placeholder' => 'Facebook Link']) }}
            {!! $errors->first('facebook_link', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nome') }}
            {{ Form::text('name', $shop->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('url') }}
            {{ Form::text('url', $shop->url, ['class' => 'form-control' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url']) }}
            {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cnpj') }}
            {{ Form::text('cnpj', $shop->cnpj, ['class' => 'form-control' . ($errors->has('cnpj') ? ' is-invalid' : ''), 'placeholder' => 'Cnpj']) }}
            {!! $errors->first('cnpj', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descrição') }}
            {{ Form::text('description', $shop->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </div>
</div>
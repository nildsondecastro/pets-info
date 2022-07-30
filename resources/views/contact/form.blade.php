<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Ativo?') }}
            {{ Form::select('active', [ 0 => 'Falso', 1 => 'Verdadeiro' ], null, ['class' => 'form-control' . ($errors->has('active') ? ' is-invalid' : '')]) }}
            {!! $errors->first('active', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('instagram') }}
            {{ Form::text('instagram_link', $contact->instagram_link, ['class' => 'form-control' . ($errors->has('instagram_link') ? ' is-invalid' : ''), 'placeholder' => 'Instagram Link']) }}
            {!! $errors->first('instagram_link', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('facebook') }}
            {{ Form::text('facebook_link', $contact->facebook_link, ['class' => 'form-control' . ($errors->has('facebook_link') ? ' is-invalid' : ''), 'placeholder' => 'Facebook Link']) }}
            {!! $errors->first('facebook_link', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('endereço') }}
            {{ Form::text('address', $contact->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefone') }}
            {{ Form::text('telefone', $contact->telefone, ['class' => 'form-control' . ($errors->has('telefone') ? ' is-invalid' : ''), 'placeholder' => 'Telefone']) }}
            {!! $errors->first('telefone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $contact->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('whatsapp') }}
            {{ Form::text('whatsapp', $contact->whatsapp, ['class' => 'form-control' . ($errors->has('whatsapp') ? ' is-invalid' : ''), 'placeholder' => 'Whatsapp']) }}
            {!! $errors->first('whatsapp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('whatsapp_link') }}
            {{ Form::text('whatsapp_link', $contact->whatsapp_link, ['class' => 'form-control' . ($errors->has('whatsapp_link') ? ' is-invalid' : ''), 'placeholder' => 'Whatsapp Link']) }}
            {!! $errors->first('whatsapp_link', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </div>
</div>
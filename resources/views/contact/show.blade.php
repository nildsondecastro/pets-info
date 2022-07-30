@extends('web.templates.templateBase')

@section('conteudo')
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contacts.index') }}"> Voltar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>ID:</strong>
                            {{ $contact->contacts_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ativo?:</strong>
                            {{ $contact->active ? 'SIM' : 'NÃO' }}
                        </div>
                        <div class="form-group">
                            <strong>Instagram:</strong>
                            {{ $contact->instagram_link }}
                        </div>
                        <div class="form-group">
                            <strong>Facebook:</strong>
                            {{ $contact->facebook_link }}
                        </div>
                        <div class="form-group">
                            <strong>Endereço:</strong>
                            {{ $contact->address }}
                        </div>
                        <div class="form-group">
                            <strong>Telefone:</strong>
                            {{ $contact->telefone }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $contact->email }}
                        </div>
                        <div class="form-group">
                            <strong>Whatsapp:</strong>
                            {{ $contact->whatsapp }}
                        </div>
                        <div class="form-group">
                            <strong>Whatsapp Link:</strong>
                            {{ $contact->whatsapp_link }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection

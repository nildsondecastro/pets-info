@extends('web.templates.templateBase')

@section('conteudo')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <div class="float-right">
                        <a href="{{ route('contacts.create') }}" class="btn btn-primary btn-sm float-right"
                            data-placement="left">
                            Adicionar
                        </a>
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
                                    <th>#</th>

                                    <th>Id</th>
                                    <th>Ativo?</th>
                                    <th>Instagram</th>
                                    <th>Facebook</th>
                                    <th>Endereço</th>
                                    <th>Telefone</th>
                                    <th>Email</th>
                                    <th>Whatsapp</th>
                                    <th>Whatsapp Link</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $contact->contacts_id }}</td>
                                        <td>{{ $contact->active ? 'SIM' : 'NÃO' }}</td>
                                        <td>{{ $contact->instagram_link }}</td>
                                        <td>{{ $contact->facebook_link }}</td>
                                        <td>{{ $contact->address }}</td>
                                        <td>{{ $contact->telefone }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->whatsapp }}</td>
                                        <td>{{ $contact->whatsapp_link }}</td>

                                        <td>
                                            <form action="{{ route('contacts.destroy', $contact->contacts_id) }}"
                                                method="POST">
                                                <a class="btn btn-sm btn-primary "
                                                    href="{{ route('contacts.show', $contact->contacts_id) }}"><i
                                                        class="fa fa-fw fa-eye"></i> Exibir</a>
                                                <a class="btn btn-sm btn-success"
                                                    href="{{ route('contacts.edit', $contact->contacts_id) }}"><i
                                                        class="fa fa-fw fa-edit"></i> Alterar</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fa fa-fw fa-trash"></i> Excluir</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $contacts->links() !!}
        </div>
    </div>
@endsection

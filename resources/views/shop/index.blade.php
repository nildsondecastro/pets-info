@extends('web.templates.templateBase')

@section('conteudo')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <div class="float-right">
                        <a href="{{ route('shops.create') }}" class="btn btn-primary btn-sm float-right"
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

                                    <th>ID</th>
                                    <th>Ativo?</th>
                                    <th>Endereço</th>
                                    <th>Telefone</th>
                                    <th>Email</th>
                                    <th>Whatsapp</th>
                                    <th>Whatsapp Link</th>
                                    <th>Instagram</th>
                                    <th>Facebook</th>
                                    <th>Nome</th>
                                    <th>Url</th>
                                    <th>Cnpj</th>
                                    <th>Descrição</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($shops as $shop)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $shop->shops_id }}</td>
                                        <td>{{ $shop->active ? 'SIM' : 'NÃO'}}</td>
                                        <td>{{ $shop->address }}</td>
                                        <td>{{ $shop->telefone }}</td>
                                        <td>{{ $shop->email }}</td>
                                        <td>{{ $shop->whatsapp }}</td>
                                        <td>{{ $shop->whatsapp_link }}</td>
                                        <td>{{ $shop->instagram_link }}</td>
                                        <td>{{ $shop->facebook_link }}</td>
                                        <td>{{ $shop->name }}</td>
                                        <td>{{ $shop->url }}</td>
                                        <td>{{ $shop->cnpj }}</td>
                                        <td>{{ $shop->description }}</td>

                                        <td>
                                            <form action="{{ route('shops.destroy', $shop->shops_id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary "
                                                    href="{{ route('shops.show', $shop->shops_id) }}"><i
                                                        class="fa fa-fw fa-eye"></i> Exibir</a>
                                                <a class="btn btn-sm btn-success"
                                                    href="{{ route('shops.edit', $shop->shops_id) }}"><i
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
            {!! $shops->links() !!}
        </div>
    </div>
@endsection

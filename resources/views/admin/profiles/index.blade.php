@extends('web.templates.templateBase')

@section('conteudo')

    <div class="row">
        <div class="bg-white rounded h-100 p-4">
            <h5 class="mb-1">Perfis</h5>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-11 row">
            @isset($profiles)
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">
                    <a href="{{route('perfis.create')}}" class="btn btn-primary rounded-pill m-2">Adicionar</a>
                </h6>
                <div class="table-responsive">
                    <table class="table" style="color: #000">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Ativo?</th>
                                <th scope="col">Permissões</th>
                                <th scope="col" style="width: 160px">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profiles as $profile)
                                <tr>
                                    <th scope="row">{{$profile->profiles_id}}</th>
                                    <td>{{$profile->name}}</td>
                                    <td>{{$profile->description ?? ''}}</td>
                                    <td>
                                        @if ($profile->active)
                                            <i class="fa fa-check-circle me-2" style="color: #008000"></i>
                                        @else
                                            <i class="fa fa-exclamation-circle me-2" style="color: #ff0000"></i>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('profiles.permissions', $profile->profiles_id)}}" class="btn btn-primary btn-sm rounded-pill">Permissões</a>
                                    </td>
                                    <td>
                                        <a href="{{route('perfis.edit', $profile->profiles_id)}}" class="btn btn-warning btn-sm rounded-pill">Editar</a>
                                        @if ($profile->active)
                                            <a href="{{route('perfil.ativar_desativar', $profile->profiles_id)}}" class="btn btn-danger btn-sm rounded-pill">Inativar</a>
                                        @else
                                            <a href="{{route('perfil.ativar_desativar', $profile->profiles_id)}}" class="btn btn-success btn-sm rounded-pill">Ativar</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
                
            @endisset
        </div> 
    </div>
    
@endsection
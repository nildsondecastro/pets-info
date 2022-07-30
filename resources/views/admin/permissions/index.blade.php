@extends('web.templates.templateBase')

@section('conteudo')

    <div class="row">
        <div class="bg-white rounded h-100 p-4">
            <h5 class="mb-1">Permissões</h5>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-11 row">
            @isset($permissions)
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">
                    <a href="{{route('permissions.create')}}" class="btn btn-primary rounded-pill m-2">Adicionar</a>
                </h6>
                <div class="table-responsive">
                    <table class="table" style="color: #000">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Ativo?</th>
                                <th scope="col" style="width: 160px">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permission)
                                <tr>
                                    <th scope="row">{{$permission->permissions_id}}</th>
                                    <td>{{$permission->name}}</td>
                                    <td>{{$permission->description ?? ''}}</td>
                                    <td>
                                        @if ($permission->active)
                                            <i class="fa fa-check-circle me-2" style="color: #008000"></i>
                                        @else
                                            <i class="fa fa-exclamation-circle me-2" style="color: #ff0000"></i>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('permissions.edit', $permission->permissions_id)}}" class="btn btn-warning btn-sm rounded-pill">Editar</a>
                                        @if ($permission->active)
                                            <a href="{{route('permission.ativar_desativar', $permission->permissions_id)}}" class="btn btn-danger btn-sm rounded-pill">Inativar</a>
                                        @else
                                            <a href="{{route('permission.ativar_desativar', $permission->permissions_id)}}" class="btn btn-success btn-sm rounded-pill">Ativar</a>
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
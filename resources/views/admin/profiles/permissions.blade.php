@extends('web.templates.templateBase')

@section('conteudo')

    <div class="row">
        <div class="bg-white rounded h-100 p-4">
            <h5 class="mb-1">Permissões do Perfil {{$profile->name}}</h5>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-11 row">
            @isset($profile)
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">
                    <form action="{{route('profiles.permissions.store')}}" method="POST">
                        @csrf
                        <input type="hidden" name="profiles_id" value="{{$profile->profiles_id}}">
                        <select name="permissions_id" class="col-6 form-select form-select-sm mb-3" aria-label=".form-select-sm example" required>
                            @isset($permissions)
                                <option value="">-- selecione --</option>
                                @foreach ($permissions as $permission)
                                    <option value="{{$permission->permissions_id}}">
                                        {{$permission->name}}
                                        -
                                        {{$permission->description ?? ''}}
                                    </option>
                                @endforeach
                            @endisset
                        </select>
                        
                        <button type="submit" class="btn btn-primary rounded-pill m-2">Adicionar</button>
                    
                    </form>
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
                            @foreach ($profile->permissions as $permission)
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
                                        <form action="{{route('profiles.permissions.destroy')}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="idProfile" value="{{$profile->profiles_id}}">
                                            <input type="hidden" name="idPermission" value="{{$permission->permissions_id}}">

                                            <button type="submit" class="btn btn-danger btn-sm rounded-pill">Excluir</button>
                                        </form>
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
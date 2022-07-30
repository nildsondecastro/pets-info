@extends('web.templates.templateBase')

@section('conteudo')

    <div class="row">
        <div class="bg-white rounded h-100 p-4">
            <h5 class="mb-1">Editar Permissão</h5>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-11 row">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">
                    Editar Permissão
                </h6>
                <form method="POST" action="{{route('permissions.update', $permission->permissions_id)}}">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Nome *</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" id="name" value="{{old('name') ?? $permission->name}}">
                            @if($errors->has('name'))<small style="color: #ff0000">{{ $errors->first('name') }}</small>@endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Descrição</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="description" id="description" value="{{old('description') ?? $permission->description}}">
                            @if($errors->has('description'))<small style="color: #ff0000">{{ $errors->first('description') }}</small>@endif
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Ativo?</legend>
                        <div class="col-sm-10">
                            <div class="form-check form-switch">
                                @if ($permission->active)
                                    <input class="form-check-input" type="checkbox" role="switch" name="active" id="active" checked="">
                                @else
                                    <input class="form-check-input" type="checkbox" role="switch" name="active" id="active">
                                @endif
                                
                            </div>
                            @if($errors->has('active'))<small style="color: #ff0000">{{ $errors->first('active') }}</small>@endif
                        </div>
                    </fieldset>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div> 
    </div>
    
@endsection
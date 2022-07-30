@extends('web.templates.templateBase')

@section('conteudo')

    <div class="row">
        <div class="bg-white rounded h-100 p-4">
            <h5 class="mb-1">Adicionar Novo Plano</h5>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-11 row">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">
                    Adicionar Novo Plano
                </h6>
                <form method="POST" action="{{route('planos.store')}}">
                    @csrf
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Nome *</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                            @if($errors->has('name'))<small style="color: #ff0000">{{ $errors->first('name') }}</small>@endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="url" class="col-sm-2 col-form-label">URL *</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="url" id="url" value="{{old('url')}}">
                            @if($errors->has('url'))<small style="color: #ff0000">{{ $errors->first('url') }}</small>@endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="icon" class="col-sm-2 col-form-label">Ícone *</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="icon" id="icon" value="{{old('icon')}}">
                            @if($errors->has('icon'))<small style="color: #ff0000">{{ $errors->first('icon') }}</small>@endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="price" class="col-sm-2 col-form-label">Preço *</label>
                        <div class="col-sm-8">
                            <div class="input-group mb-3">
                                <span class="input-group-text">R$</span>
                                <input type="number" class="form-control" name="price" value="{{old('price')}}">
                                <span class="input-group-text">.00</span>
                            </div>
                            @if($errors->has('price'))<small style="color: #ff0000">{{ $errors->first('price') }}</small>@endif
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Ativo?</legend>
                        <div class="col-sm-10">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="active" id="active" checked="">
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
@extends('web.templates.templateBase')

@section('conteudo')

    <div class="row">
        <div class="bg-white rounded h-100 p-4">
            <h5 class="mb-1">Adicionar Novo Vínculo entre Plano e Perfil</h5>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-11 row">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">
                    Adicionar Novo Vínculo entre Plano e Perfil
                </h6>
                <form method="POST" action="{{route('planos_perfis.store')}}">
                    @csrf
                    
                    <div class="row">
                        <label for="plans_id" class="col-sm-2 col-form-label">Plano *</label>
                        <select name="plans_id" class="col-6 form-select form-select-sm mb-3" aria-label=".form-select-sm example" required>
                            @isset($plans)
                                <option value="">-- selecione --</option>
                                @foreach ($plans as $plan)
                                    <option value="{{$plan->plans_id}}">
                                        {{$plan->name}}
                                    </option>
                                @endforeach
                            @endisset
                        </select>
                    </div>

                    <div class="row">
                        <label for="profiles_id" class="col-sm-2 col-form-label">Perfil *</label>
                        <select name="profiles_id" class="col-6 form-select form-select-sm mb-3" aria-label=".form-select-sm example" required>
                            @isset($profiles)
                                <option value="">-- selecione --</option>
                                @foreach ($profiles as $profile)
                                    <option value="{{$profile->profiles_id}}">
                                        {{$profile->name}}
                                    </option>
                                @endforeach
                            @endisset
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div> 
    </div>
    
@endsection
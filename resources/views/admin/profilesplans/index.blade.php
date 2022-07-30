@extends('web.templates.templateBase')

@section('conteudo')

    <div class="row">
        <div class="bg-white rounded h-100 p-4">
            <h5 class="mb-1">Planos e Perfis</h5>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-11 row">
            @isset($profiles_plans)
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">
                    <a href="{{route('planos_perfis.create')}}" class="btn btn-primary rounded-pill m-2">Adicionar</a>
                </h6>
                <div class="table-responsive">
                    <table class="table" style="color: #000">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Plano</th>
                                <th scope="col">Perfil</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profiles_plans as $profile_plan)
                                <tr>
                                    <th scope="row">{{$profile_plan->profile_plan_id}}</th>
                                    <td>{{$profile_plan->plan->name}}</td>
                                    <td>{{$profile_plan->profile->name}}</td>
                                    <td>
                                        <form action="{{route('planos_perfis.destroy', $profile_plan->profile_plan_id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
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
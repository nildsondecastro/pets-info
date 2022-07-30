@extends('web.templates.templateBase')

@section('conteudo')

    <div class="row">
        <div class="bg-white rounded h-100 p-4">
            <h5 class="mb-1">Planos</h5>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-11 row">
            @isset($plans)
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">
                    <a href="{{route('planos.create')}}" class="btn btn-primary rounded-pill m-2">Adicionar</a>
                </h6>
                <div class="table-responsive">
                    <table class="table" style="color: #000">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">URL</th>
                                <th scope="col">Ícone</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Ativo?</th>
                                <th scope="col">Detalhes</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($plans as $plan)
                                <tr>
                                    <th scope="row">{{$plan->plans_id}}</th>
                                    <td>{{$plan->name}}</td>
                                    <td>{{$plan->url}}</td>
                                    <td>
                                        <i class="fa fa-{{$plan->icon}} me-2"></i>
                                    </td>
                                    <td>R$ @convert_money($plan->price)</td>
                                    <td>
                                        @if ($plan->active)
                                            <i class="fa fa-check-circle me-2" style="color: #008000"></i>
                                        @else
                                            <i class="fa fa-exclamation-circle me-2" style="color: #ff0000"></i>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('detalhes_do_plano.index', ['plans_id' => $plan->plans_id])}}" class="btn btn-primary btn-sm rounded-pill">Detalhes</a>
                                    </td>
                                    <td>
                                        <a href="{{route('planos.edit', $plan->plans_id)}}" class="btn btn-warning btn-sm rounded-pill">Editar</a>
                                        @if ($plan->active)
                                            <a href="{{route('plano.ativar_desativar', $plan->plans_id)}}" class="btn btn-danger btn-sm rounded-pill">Inativar</a>
                                        @else
                                            <a href="{{route('plano.ativar_desativar', $plan->plans_id)}}" class="btn btn-success btn-sm rounded-pill">Ativar</a>
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
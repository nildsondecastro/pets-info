@extends('web.templates.templateBase')

@section('conteudo')

    <div class="row">
        <div class="bg-white rounded h-100 p-4">
            <h5 class="mb-1">Lista de Detalhes do {{$plano->name}}</h5>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-11 row">
            @isset($plano)
            <div class="bg-light rounded h-100 p-4">
                <div class="table-responsive">
                    <table class="table" style="color: #000">
                        <thead>
                            <tr scope="row">
                                <th scope="col" style="width: 75px">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col" style="width: 50px">Ações</th>
                                <th scope="col" style="width: 50px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($plano->details as $detail)
                                <form action="{{route('detalhes_do_plano.update', $detail->details_id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="plans_id" value="{{$plano->plans_id}}">

                                    <tr>
                                        <th scope="row">
                                            {{$detail->details_id}}
                                        </th>
                                        <td>
                                            <input 
                                                type="text" 
                                                class="form-control" 
                                                name="name" 
                                                value="{{$detail->name}}"
                                                required
                                            >
                                        </td>
                                        <td>
                                                <button type="submit" class="btn btn-warning btn-sm rounded-pill">Editar</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{route('detalhes_do_plano.destroy', $detail->details_id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm rounded-pill">Excluir</button>
                                            </form>
                                        </td>
                                    </tr>
                                
                            @endforeach
                            <form action="{{route('detalhes_do_plano.store')}}" method="POST">
                                @csrf
                                <input type="hidden" name="plans_id" value="{{$plano->plans_id}}">

                                <tr>
                                    <th scope="row">
                                        #
                                    </th>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            name="name"
                                            required
                                        >
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary btn-sm rounded-pill">Adicionar</button>
                                    </td>
                                </tr>
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
                
            @endisset
        </div> 
    </div>
    
@endsection
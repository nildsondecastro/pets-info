@extends('web.templates.templateBase')

@section('conteudo')

    <div class="row">
        @isset($plans)
            @foreach ($plans as $plan)
                <div class="col-md-4 stretch-card grid-margin grid-margin-md-0">
                    <div class="card data-icon-card-primary">
                        <div class="card-body">
                            <p class="card-title text-white">{{ $plan->name }}</p>
                            <div class="row">
                                <div class="col-8 text-white">
                                    <h3>R$ @convert_money($plan->price)</h3>
                                    <ul>
                                        @foreach ($plan->details as $detail)
                                            <li class="text-white font-weight-500 mb-0">
                                                {{ $detail->name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <i class="col-4 {{$plan->icon ?? ''}} icon-lg"></i>
                                <div class="col-12">
                                    <a href="{{ route('contact') }}"
                                        class="btn btn-success rounded-pill m-2">Assinar</a>
                                    <a href="{{ route('contact') }}"
                                        class="btn btn-success rounded-pill m-2">Testar por 7 dias</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endisset
    </div>

@endsection

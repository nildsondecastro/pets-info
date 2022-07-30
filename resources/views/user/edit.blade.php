@extends('web.templates.templateBase')

@section('conteudo')
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('users.update', $user->id) }}"  role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf
                        @include('user.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

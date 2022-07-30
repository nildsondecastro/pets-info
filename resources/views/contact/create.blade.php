@extends('web.templates.templateBase')

@section('conteudo')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">

            @includeif('partials.errors')

            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('contacts.store') }}"  role="form" enctype="multipart/form-data">
                        @csrf
                        @include('contact.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

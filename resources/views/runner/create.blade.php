@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content-wrapper">
            @include('components.messages')
            <div class="row" style="margin-left:auto; margin-bottom:5px;">
                <div class="d-flex">
                    <h1 style="margin-top: 9px; margin-left: 8px">Corredor</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Cadastrar corredor</h4>
                            {!! Form::open(['route' => ['runner.store'], 'method'=>'POST']) !!}
                            <div class="form-group">
                                {!! Form::label('name', 'Nome do corredor', ['class' => 'color-blue']) !!}
                                {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('cpf', 'CPF do corredor', ['class' => 'color-blue']) !!}
                                {!! Form::text('cpf', null, ['class' => 'form-control document', 'required' => 'required']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('born_at', 'Data de dascimento', ['class' => 'color-blue']) !!}
                                {!! Form::text('born_at', null, ['class' => 'form-control born_at', 'required' => 'required']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('race', 'Selecione um corrida') !!}
                                {!! Form::select('race', $races, null, ['class' => 'form-control']) !!}
                            </div>

                            {!! Form::submit('Criar corredor', ['class' => 'btn btn-success']) !!}

                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script src="{{ asset('js/jquery.mask.min.js') }}" type="text/javascript"></script>
<script>
    $(".document").mask("999.999.999-99");
    $(".born_at").mask("99/99/9999");
</script>
@endsection

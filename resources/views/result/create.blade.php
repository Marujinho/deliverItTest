@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content-wrapper">
        @include('components.messages')
        <div class="row" style="margin-left:auto; margin-bottom:5px;">
            <div class="d-flex">

                <h1 style="margin-top: 9px; margin-left: 8px">Resultados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cadastrar resultados</h4>
                          {!! Form::open(['route' => ['result.store'], 'method'=>'POST']) !!}

                            <div class="form-group">
                                {!! Form::label('race_id', 'Selecione um corrida') !!}
                                {!! Form::select('race_id', $races, null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('race_id', 'Selecione um corredor') !!}
                                {!! Form::select('runner_id', $runners, null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('started_at', 'Iniciou a prova') !!}
                                {!! Form::time('started_at', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('finished_at', 'Terminou a prova') !!}
                                {!! Form::time('finished_at', null, ['class' => 'form-control']) !!}
                            </div>

                            {!! Form::submit('Criar prova', ['class' => 'btn btn-success']) !!}
                          {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

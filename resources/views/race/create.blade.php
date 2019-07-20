@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content-wrapper">
        <div class="row" style="margin-left:auto; margin-bottom:5px;">
            <div class="d-flex">
                <i onclick="window.history.go(-1); return false;" style=" cursor:pointer" class="mdi mdi-arrow-left-drop-circle text-default icon-lg"></i>
                <h1 style="margin-top: 9px; margin-left: 8px">Provas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cadastrar prova</h4>
                        {{ Form::open() }}
                        <div class="form-group">
                            {!! Form::label('type', 'Tipo da prova (em km)', ['class' => 'color-blue']) !!}
                            {!! Form::text('type', null, ['class' => 'form-control', 'placeholder' => 'Cpf do corredor do usuário', 'required' => 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('starts_at', 'Data da prova', ['class' => 'color-blue']) !!}
                            {!! Form::text('starts_at', null, ['class' => 'form-control', 'placeholder' => 'Nome do corredor', 'required' => 'required']) !!}
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

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content-wrapper">
            <div class="row" style="margin-left:auto; margin-bottom:5px;">
                <div class="d-flex">
                    <i onclick="window.history.go(-1); return false;" style=" cursor:pointer"
                       class="mdi mdi-arrow-left-drop-circle text-default icon-lg"></i>
                    <h1 style="margin-top: 9px; margin-left: 8px">Corredor</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Cadastrar corredor</h4>
                            <p class="card-description">

                            @if(count($errors) > 0)
                                <div class="alert alert-danger" role="alert" class="eubb">
                                    <ul style="margin: 0px;">
                                        @foreach($errors->all() as $error)
                                            <li>{!! $error !!}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            </p>
                            {{ Form::open() }}
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



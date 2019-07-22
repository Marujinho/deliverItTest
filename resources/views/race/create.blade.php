@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content-wrapper">
        @include('components.messages')
        <div class="row" style="margin-left:auto; margin-bottom:5px;">
            <div class="d-flex">

                <h1 style="margin-top: 9px; margin-left: 8px">Provas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cadastrar prova</h4>
                          {!! Form::open(['route' => ['race.store'], 'method'=>'POST']) !!}
                        <div class="form-group">
                            {!! Form::label('type', 'Tipo da prova (em km)', ['class' => 'color-blue']) !!}
                            {!! Form::number('type', null, ['class' => 'form-control', 'min' => '1','required' => 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('starts_at', 'Data da prova', ['class' => 'color-blue']) !!}
                            {!! Form::text('starts_at', null, ['class' => 'form-control starts_at','placeholder'=>'05/09/2019', 'required' => 'required']) !!}
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



@section('js')
<script src="{{ asset('js/jquery.mask.min.js') }}" type="text/javascript"></script>
<script>
    $(".starts_at").mask("99/99/9999");
</script>
@endsection

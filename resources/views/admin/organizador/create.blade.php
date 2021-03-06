@extends('layouts.admin')

@section('content')
    <div class="page-header clearfix">
        <h2 class="pull-left">Organizador <small>novo registro</small></h2>
        <div class="pull-right header-buttons">
            <a href="{{ route('admin.organizador.index') }}" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Voltar</a>
        </div>
    </div>

    @include('partials.alerts')

    <form action="{{ route('admin.organizador.store') }}" method="POST" data-toggle="validator" role="form" id="checkin-form">
        {{ csrf_field() }}

        @include('admin.organizador.form', ['entry' => null])
    </form>
@stop
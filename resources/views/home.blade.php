@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Hello, Dev!</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                    <div class="card-header">
                        Alunos
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Listagem de alunos</h5>
                        <a href="{{ url('alunos') }}" class="btn btn-primary">Ir para alunos</a>
                    </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Disciplinas
                </div>
                <div class="card-body">
                    <h5 class="card-title">Listagem de disciplinas</h5>
                    <a href="{{ url('disciplinas') }}" class="btn btn-primary">Ir para disciplinas</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

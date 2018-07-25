@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Novo Disciplina</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('disciplinas.store') }}" aria-label="Disciplinas">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" class="form-control{{ $errors->has('matricula') ? ' is-invalid' : '' }}"  name="matricula" id="matricula" placeholder="Matrícula do aluno" required autofocus maxlength="6">
                                @if ($errors->has('matricula'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('matricula') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Cadastrar</button>
                        <a href="{{url('alunos')}}" class="btn btn-block btn-secondary">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Novo Aluno</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('alunos.store') }}" aria-label="Alunos">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control{{ $errors->has('matricula') ? ' is-invalid' : '' }}"  name="matricula" id="matricula" placeholder="Matrícula do aluno" required autofocus maxlength="6">
                                @if ($errors->has('matricula'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('matricula') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control{{ $errors->has('data_entrada') ? ' is-invalid' : '' }}" name="data_entrada" id="data_entrada" placeholder="Data de Entrada na Escola" required>
                                 @if ($errors->has('data_entrada'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('data_entrada') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" placeholder="E-mail" required>
                                 @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" id="nome" placeholder="Nome" required>
                             @if ($errors->has('nome'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nome') }}</strong>
                                </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control{{ $errors->has('endereco') ? ' is-invalid' : '' }}" name="endereco" id="endereco" placeholder="Endereço" required>
                             @if ($errors->has('endereco'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('endereco') }}</strong>
                                </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control{{ $errors->has('bairro') ? ' is-invalid' : '' }}" name="bairro" id="bairro" placeholder="Bairro" required>
                             @if ($errors->has('bairro'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('bairro') }}</strong>
                                </span>
                                @endif
                        </div>
                        <div class="form-row">
                             <div class="form-group col-md-4">
                                <input type="text" class="form-control{{ $errors->has('uf') ? ' is-invalid' : '' }}" name="uf" id="uf" placeholder="UF" required>
                               
                                 @if ($errors->has('uf'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('uf') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group col-md-5">
                                <input type="text" class="form-control{{ $errors->has('cidade') ? ' is-invalid' : '' }}" name="cidade" id="cidade" placeholder="Cidade" required>
                                 @if ($errors->has('cidade'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('cidade') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control{{ $errors->has('cep') ? ' is-invalid' : '' }}" name="cep" id="cep" placeholder="CEP" required>
                                 @if ($errors->has('cep'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('cep') }}</strong>
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

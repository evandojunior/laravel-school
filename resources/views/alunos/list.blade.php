@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mx-auto jumbotron justify-content-center">
    <div class="col-md-12">
        <h5>Cadastrar Aluno</h5>
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
                                <input type="date" class="form-control{{ $errors->has('data_entrada') ? ' is-invalid' : '' }}" name="data_entrada" id="data_entrada" placeholder="Data de Entrada na Escola" required>
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
                        @if($disciplinas->count())
                        <div class="form-group">
                         <h5>Disciplinas</h5>
                            @foreach($disciplinas as $disciplina)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="disciplinas[]" value="{{ $disciplina->id }}" id="">
                                <label class="form-check-label" for="">
                                    {{ $disciplina->titulo }}
                                </label>
                            </div>
                            @endforeach
                        </div>
                        @endif
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
            </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Matrícula</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cidade/UF</th>
                    <th scope="col">Data de Entrada na Escola</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($alunos as $aluno)
                    <tr>
                        <th scope="row">{{$aluno->matricula}}</th>
                        <td>{{$aluno->nome}}</td>
                        <td>{{$aluno->cidade}}/{{$aluno->uf}}</td>
                        <td>{{$aluno->data_entrada->format('d/m/Y')}}</td>
                        <td><a href='{{url("alunos/$aluno->id")}}'>Visualizar</a></td>
                        <td><a href='{{url("alunos/$aluno->id/edit")}}'>Editar</a></td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

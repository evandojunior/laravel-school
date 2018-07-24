@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{url('alunos')}}" class="btn btn-secondary mb-3"> Voltar</a>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header">Visualizar Aluno</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('alunos.store') }}" aria-label="Alunos">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control"  name="matricula" id="matricula" placeholder="Matrícula do aluno" value="{{$aluno->matricula}}" required autofocus maxlength="6">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" name="data_entrada" id="data_entrada" placeholder="Data de Entrada na Escola" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro" required>
                        </div>
                        <div class="form-row">
                             <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="uf" id="uf" placeholder="UF" required>
                            </div>
                            <div class="form-group col-md-5">
                                <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" required>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP" required>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">Disciplinas</div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Título</th>
                            <th scope="col">Nota 1</th>
                            <th scope="col">Nota 2</th>
                            <th scope="col">Nota 3</th>
                            <th scope="col">Média</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($aluno->disciplinas as $disciplina)
                            <tr>
                                <td>{{$disciplina->titulo}}</td>
                                <td>{{$disciplina->pivot->nota_1}}</td>
                                <td>{{$disciplina->pivot->nota_2}}</td>
                                <td>{{$disciplina->pivot->nota_3}}</td>
                                <td>{{$disciplina->calculaMedia()}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{url('alunos/create')}}" class="btn btn-primary mb-3">Novo aluno</a>
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

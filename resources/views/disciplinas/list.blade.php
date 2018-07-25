@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row jumbotron mx-auto">
        <div class="mx-auto">
          <form method="post" action="{{ route('disciplinas.store') }}" class="form-inline">
          @csrf
            <label class="sr-only" for="disciplinaTitulo">Disciplina</label>
            <input type="text" name="titulo" class="form-control mb-2 mr-sm-2" id="disciplinaTitulo" placeholder="Disciplina">
            <button type="submit" class="btn btn-primary mb-2">Cadastrar</button>
         </form>
        </div>
    </div>

    <div class="row justify-content-center">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <div class="col-md-12">
            <h4>Disciplinas</h4>
            <table class="table table-hover table-md">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Título</th>
                    <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($disciplinas as $disciplina)
                        <tr>
                            <td>{{ $disciplina->id }}</td>
                            <td>{{ $disciplina->titulo }}</td>
                            <td>
                           <form action="{{ route('disciplinas.destroy', $disciplina->id) }}" method="post">
                                @csrf
                                @method("DELETE")
                                <input type="submit" class="btn btn-danger btn-sm" href="{{ $disciplina->id }}" value="Excluir" onclick="return confirm('Você quer mesmo apagar essa disciplina? #{{ $disciplina->titulo}} ')">
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

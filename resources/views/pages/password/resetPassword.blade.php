@extends('layouts.app')
@section('title')
Resetar senha
@endsection
@section('content')

<div class="card">
    <div class="card-header bg-purple">
        <h3 class="card-title">Alterar Senha</h3>
    </div>
    <div class="card-body p-0">
        @if (session()->has('message'))
        <div class="alert alert-info m-3">
            Por gentileza, realize a alteração de sua senha para mais segurança.
        </div>
        @endif

        <form method="POST" action="{{route('reset.password')}}">
            @csrf
            <div class="card-body">

                @error('password_confirme')
                <div class="alert alert-danger">
                    Confirmação de senha inválida. Senhas digitadas não são iguais
                </div>
                @enderror
                <div class="form-group">
                    <label for="exampleInputEmail1">Nova senha: </label>
                    <input type="password" name="password" class="form-control" id="exampleInputEmail1"
                        placeholder="Nova senha">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirme senha</label>
                    <input type="password" name="password_confirme" class="form-control" id="exampleInputPassword1"
                        placeholder="Confirme senha">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-block">Alterar</button>
            </div>
        </form>

    </div>
</div>

@endsection
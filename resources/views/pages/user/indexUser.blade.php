@extends('layouts.app')
@section('title')
Usuários
@endsection
@section('content')

<div class="card">
    <div class="card-header bg-purple">
        <h3 class="card-title">Usuários</h3>
        <div class="card-tools">
            <ul class="pagination pagination-sm float-right">
              <li class="page-item"><a href="{{route('user.create')}}" class="page-link bg-info"><i
                            class="fas fa-plus"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-body p-0">
        @if (session()->has('message'))
        <div class="alert alert-success ml-5 mr-5 mb-1 mt-1">
            {{ session('message') }}
        </div>
        @endif
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Função</th>
                    <th scope="col">situação</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{($user->deleted_at == null) ? 'Ativo' : 'Inativo'}}</td>
                    <td>
                        <span class="badge badge-info">{{$user->role->description}}</span>
                    </td>
                    <td>
                        <a href="{{route('user.show',$user->id)}}" class="btn btn-info" title="Ver Perfil"><i class="fas fa-eye"></i></a>
                        {{-- <button class="btn btn-secondary" title="Permissões"><i class="fas fa-key"></i></button>
                        <button class="btn btn-danger" title="Excluir"><i class="fas fa-trash"></i></button> --}}
                    <td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection
{{-- <x-slot name="title_head">
    Usuários
</x-slot> --}}
@extends('layouts.app')
@section('title')
Novo Usuário
@endsection
@section('content')

<div class="card">
    <div class="card-header bg-purple">
        <h3 class="card-title">Criar Usuário</h3>
        <div class="card-tools">
            <ul class="pagination pagination-sm float-right">
           
                <li class="page-item"><a href="{{route('user.index')}}" class="page-link bg-info"><i
                            class="fas fa-arrow-alt-circle-left"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-body p-2">
      
        
        <div class="container ">
            @include('forms.user.formUser')
        </div>
       


    </div>
</div>

@endsection
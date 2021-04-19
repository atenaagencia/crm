@extends('layouts.app')
@section('title')
Nichos
@endsection

@section('content')

<div class="card"
>
    <div class="card-header bg-purple">
        <h3 class="card-title">Nichos</h3>
        <div class="card-tools">
            <ul class="pagination pagination-sm float-right">
                <li class="page-item"><a href="{{route('niche.create')}}" class="page-link bg-info"><i
                            class="fas fa-plus"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-body p-0">
        
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
          <tbody>
            @foreach($niches as $niche)
            <tr>
                <td>{{$niche->id}}</td>
                <td>{{$niche->description}}</td>
                <td>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#niche-{{$niche->id}}">
                      <i class="fas fa-edit"></i>
                    </button>
                <td>
            </tr>
            @endforeach
        </tbody>

        </table>

    </div>
</div>
@foreach($niches as $niche_modal)
<div class="modal fade" id="niche-{{$niche_modal->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar nicho </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    @include('forms.niche.formNiche')      
                
            </div>
            <div class="modal-footer justify-content-between">
                {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button> --}}

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
    
@endforeach 

<div class="modal fade" id="niche-create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cadastrar nicho </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('forms.niche.formNiche')

            </div>
            <div class="modal-footer justify-content-between">
                {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button> --}}

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@endsection




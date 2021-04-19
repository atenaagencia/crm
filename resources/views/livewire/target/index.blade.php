<div class="card" wire:poll="mount">
    <div class="card-header bg-purple">
        <h3 class="card-title">Alvos</h3>
        <div class="card-tools">
            <ul class="pagination pagination-sm float-right">
                <li class="page-item"><button class="page-link bg-info" data-toggle="modal"
                        data-target="#target-create"><i class="fas fa-plus"></i></button></li>
            </ul>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Nicho</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Estágio</th>
                    <th scope="col">Ultima Atualização</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($targets as $target)

                <tr>
                    <td>{{$target->id}}</td>
                    <td>{{$target->empresa}}</td>
                    <td>
                        <span
                            class="badge badge-info">{{(isset($target->niche->description) ) ? $target->niche->description : 'Não classificado'}}</span>
                    </td>
                    <td>{{$target->cidade.' - '.$target->uf}}</td>
                    <td>{{$target->tipo}}</td>
                    <td>{{$target->estagio}}</td>
                    <td>{{$target->updated_at->format('d/m/Y - H:i')}}</td>
                    <td>
                        <a href="{{route('target.show',$target->id)}}" class="btn btn-info"
                            title="Ver ficha de contato"><i class="fas fa-window-maximize"></i></a>
                        {{-- <button class="btn btn-secondary" title="Registros"><i class="fas fa-list"></i></button> --}}
                        @if(Auth::user()->role->label == "admin")
                        <button class="btn btn-secondary" title="Editar Alvo">
                            <i class="fas fa-edit"></i>
                        </button>
                        @endif
                    <td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
</div>

<div class="modal fade" id="target-create">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <h4 class="modal-title">Cadastrar Alvo </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('forms.target.formTarget')

            </div>
            <div class="modal-footer justify-content-between">
                {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button> --}}

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal-dialog -->
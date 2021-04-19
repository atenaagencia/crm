@extends('layouts.app')
@section('title')
Alvo - Ficha
@endsection
@section('links')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('content')

<div class="card">
    <div class="card-header bg-purple">
        <h3 class="card-title">Ficha </h3>
        <div class="card-tools">
            <ul class="pagination pagination-sm float-right">
                <li class="page-item"><a href="{{ url()->previous() }}" class="page-link bg-info"><i
                            class="fas fa-arrow-left"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <span class="info-box-text text-center text-muted">Telefone</span>
                                <span
                                    class="info-box-number text-center text-muted mb-0">{{($target->telefone)? $target->telefone : 'Não cadastrado'}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <span class="info-box-text text-center text-muted">WhatsApp</span>
                                <span
                                    class="info-box-number text-center text-muted mb-0">{{($target->whatsapp)? $target->whatsapp : 'Não cadastrado'}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <span class="info-box-text text-center text-muted">Instagram</span>
                                <span class="info-box-number text-center text-muted mb-0">
                                    {{($target->instagram)? $target->instagram : 'Não cadastrado'}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <span class="info-box-text text-center text-muted">Facebook</span>
                                <span class="info-box-number text-center text-muted mb-0">
                                    {{($target->facebook)? $target->facebook : 'Não cadastrado'}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <span class="info-box-text text-center text-muted">Site</span>
                                <span class="info-box-number text-center text-muted mb-0">
                                    {{($target->site)? $target->site : 'Não cadastrado'}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <span class="info-box-text text-center text-muted">Outras redes</span>
                                <span class="info-box-number text-center text-muted mb-0">
                                    {{($target->outras_redes)? $target->outras_redes : 'Não cadastrado'}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h4>Registros de Atividades</h4>
                        @foreach ($target->records as $record )
                        <div class="post">
                            <hr>
                            <p>
                                {{$record->descricao}}
                            </p>

                            <p>
                                <a href="#" class="link-black text-sm">
                                    <i class="fas fa-check mr-1"></i>
                                    Registrado por: <b>{{$record->user->name}} </b> às {{$record->created_at->format('d/m/Y - H:i')}}
                                </a>
                            </p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                <h3 class="text-purple"><i class="fas fa-paste"></i> {{$target->empresa}}</h3>
                {{-- <p class="text-muted">
                    Atualizado em : <b>{{$target->updated_at->format('d/m/Y - H:i')}}</b>
                <p class="text-muted">
                    Vendedor atual: <b>{{$target->vendedor->name}}</b>
                </p>
                </p>
                <br> --}}
                <div class="text-muted">
                    <p class="text-sm">Atualizado:
                        <b class="d-block">{{$target->updated_at->format('d/m/Y - H:i')}}</b>
                    </p>
                    <p class="text-sm">Vendedor atual:
                        <b class="d-block">{{($target->vendedor->name)? $target->vendedor->name : 'Não cadastrado'}}</b>
                    </p>
                    <p class="text-sm">Ramo:
                        <b
                            class="d-block">{{($target->niche->description)? $target->niche->description : 'Não cadastrado'}}</b>
                    </p>
                    <p class="text-sm">Tipo:
                        <b class="d-block">{{($target->tipo)? $target->tipo : 'Não cadastrado'}}</b>
                    </p>
                    <p class="text-sm">Estágio:
                        <b class="d-block">{{($target->estagio)? $target->estagio : 'Não cadastrado'}}</b>
                    </p>
                    <p class="text-sm">Representante:
                        <b class="d-block">{{($target->representante)? $target->representante : 'Não cadastrado'}}</b>
                    </p>
                </div>

                {{-- <h5 class="mt-5 text-muted">Project files</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i>
                            Functional-requirements.docx</a>
                    </li>
                    <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                    </li>
                    <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i>
                            Email-from-flatbal.mln</a>
                    </li>
                    <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                    </li>
                    <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i>
                            Contract-10_12_2014.docx</a>
                    </li>
                </ul> --}}
                <div class="text-center mt-5 mb-3">
                    <a href="#" class="btn btn-sm btn-primary">
                        <i class="fas fa-comment"></i>
                        Registrar Atendimento</a>
                    <a href="#" class="btn btn-sm btn-warning">
                        <i class="fas fa-list"></i>
                        Gerar Proposta</a>
                    {{-- <a href="#" class="btn btn-sm btn-warning">Report contact</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    {{-- <div class="card-footer">
                            Footer
                        </div> --}}
    <!-- /.card-footer-->
</div>
<!-- /.card -->

@endsection
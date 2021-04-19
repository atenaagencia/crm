@extends('layouts.app')
@section('title')
Criar Nicho
@endsection

@section('content')

<div class="card">
    <div class="card-header bg-purple">
        <h3 class="card-title">Criar Nicho</h3>
        <div class="card-tools">
            <ul class="pagination pagination-sm float-right">

                <li class="page-item"><a href="{{route('niche.index')}}" class="page-link bg-info"><i
                            class="fas fa-arrow-alt-circle-left"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-body p-2">
        @if (session()->has('message'))
        <div class="alert alert-success ml-5 mr-5 mb-1 mt-1">
            {{ session('message') }}
        </div>
        @endif
            @include('forms.niche.formNiche')
    </div>
</div>

@endsection
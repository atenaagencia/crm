{{-- <x-slot name="title_head">
    Alvos
</x-slot> --}}
@extends('layouts.app')
@section('title')
Alvos
@endsection

@section('content')

@livewire('target.index')
@endsection
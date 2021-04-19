@extends('layouts.app')
@section('title')
Dashboard
@endsection
@section('links')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('content')
{{-- <x-slot name="links_head">
 <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</x-slot>
<x-slot name="title_head">
    Dashboard
</x-slot> --}}

<div class="card">
    <div class="card-header bg-purple">
        <h3 class="card-title">Dashboard</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-teal">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Alvos</p>
                    </div>
                    <div class="icon">
                        <i class="ion-paper-airplane"></i>
                    </div>
                    <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-teal">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                        <p>Leads</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-stalker"></i>
                    </div>
                    <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-teal">
                    <div class="inner">
                        <h3>44</h3>

                        <p>Contratos Abertos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-paper"></i>
                    </div>
                    <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-teal">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Comissões</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>
                    <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
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
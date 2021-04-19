
@extends('layouts.app')
@section('title')
Perfil
@endsection
@section('links')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('content')

<div class="card">
    <div class="card-header bg-purple">
        <h3 class="card-title">Perfil</h3>
    </div>
    <div class="card-body">
     <div class="row">
     <div class="col-md-3">
    
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="/images/avatar_m.png"
                        alt="User profile picture">
                </div>
    
                <h3 class="profile-username text-center">{{$user->name}}</h3>
    
                <p class="text-muted text-center">{{$user->role->description}}</p>
    
                {{-- <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Followers</b> <a class="float-right">1,322</a>
                    </li>
                    <li class="list-group-item">
                        <b>Following</b> <a class="float-right">543</a>
                    </li>
                    <li class="list-group-item">
                        <b>Friends</b> <a class="float-right">13,287</a>
                    </li>
                </ul>
    
                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    
        <!-- About Me Box -->
        <!-- /.card -->
    </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Timeline</a></li>
                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Configurações</a></li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <!-- /.tab-pane -->
                        <div class="tab-pane active " id="timeline">
                            <!-- The timeline -->
                            <div class="timeline timeline-inverse">
                                <!-- timeline time label -->
                                <div class="time-label">
                                    <span class="bg-danger">
                                        10 Feb. 2014
                                    </span>
                                </div>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-envelope bg-primary"></i>
    
                                    <div class="timeline-item">
                                        <span class="time"><i class="far fa-clock"></i> 12:05</span>
    
                                        <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
    
                                        <div class="timeline-body">
                                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                            quora plaxo ideeli hulu weebly balihoo...
                                        </div>
                                        <div class="timeline-footer">
                                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                        </div>
                                    </div>
                                </div>
                             
                               
                            </div>
                        </div>
                        <!-- /.tab-pane -->
    
                        <div class="tab-pane" id="settings">
                         
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        
        
        <!-- /.col -->
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
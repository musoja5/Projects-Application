@extends('layouts.app')

@section('content')
<body class="hold-transition sidebar-mini">
  
  <div class="wrapper">
  

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
  
      <a href="{{ url('oc.dashboard') }}"  class="brand-link">
        <!-- <img src="https://adminlte.io/themes/v3/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <a href="{{ url('oc.dashboard') }}" class="brand-link" style="text-decoration: none;">MENU</a>
      </a>

  
      <div class="sidebar">
  
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div> -->

  <!-- the search button -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

  
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
                <p>
                Users
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{ url('oc.users') }}" class="nav-link">
                    <i class="far fa-eye nav-icon"></i>
                    <p>View All Users</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('oc.task') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All Tasks</p>
                  </a>
                </li>

              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
                <p>
               Developers Projects
                  <i class="fas fa-angle-left right"></i>
                 
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{ url('oc.projects') }}" class="nav-link">
                    <i class="far fa-eye nav-icon"></i>
                    <p>View All Work</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('oc.task') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All Tasks</p>
                  </a>
                </li>

              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Student Projects
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right">6</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('oc.class') }}"class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>About Class</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('oc.stud-project') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Show student work</p>
                  </a>
                </li>

              </ul>
            </li>
          </ul>
        </nav>
      </div>
  
    </aside>
  
    
  
    <div class="content-wrapper">
  
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Welcome Oc</h1>
            </div>
     
          </div>
        </div>
      </div>
  
      
      <section class="content">
        <div class="container-fluid">
         
          <div class="row">
            <div class="col-lg-3 col-6">
             
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{$users}}</h3>

                 <p class="text-white">Users</p>

                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="{{ url('oc.users') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            
            <div class="col-lg-3 col-6">
              
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{$systems}}<sup style="font-size: 20px"></sup></h3>

                  <p class="text-white">Developers Work</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ url('oc.projects') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{$students}}</h3>

                   <p class="text-white">Number Of Students</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ url('oc.stud-project') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{$tasks}}</h3>

                  <p class="text-white">Number Of Tasks</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{ url('oc.task') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          
          </div>
          
        </div>
      </section>
<section class="content">
                                                                 <div class="container">
                                                        <div class="row justify-content-center">
                                                            <div class="col-md-12">
                                                                <div class="card">
                                                                    <div class="card-header">{{ __('Register') }}</div>

                                                                    <div class="card-body">
                                                                    <form action="{{ url('update-user/'.$item->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('PUT')

                                                                            <!-- service number -->
                                                                            <div class="row mb-3">
                                                                                <label for="svc_no" class="col-md-4 col-form-label text-md-end">{{ __('Service _Number') }}</label>

                                                                                <div class="col-md-6">
                                                                                <input type="number" name="svc_no" value="{{$item->svc_no}}" class="form-control">
                                                                                </div>
                                                                            </div>

                                                                            <!-- rank -->
                                                                            <div class="row mb-3">
                                                                                <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Level') }}</label>
                                                                            <div class="col-md-6">

                                                                                <select name="role" id="role" required>
                                                                                <option value="{{$item->role}}" style="font-style:italic">"{{$item->role}}"  </option>
                                                                                
                                                                                    <option value="0">Course Commander</option>
                                                                                    <option value="1">O C</option>
                                                                                    <option value="2">si</option>
                                                                            

                                                                                </select>
                                                                               
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-3">
                                                                                <label for="rank" class="col-md-4 col-form-label text-md-end">{{ __('Rank') }}</label>

                                                                                <div class="col-md-6">

                                                                                    <select name="rank" id="rank" required>
                                                                                    <option value="{{$item->rank}}" style="font-style:italic">"{{$item->rank}}" </option>
                                                                                    
                                                                                        <option value="cpl">Corporal</option>
                                                                                        <option value="sgt">Sergeant</option>
                                                                                        <option value="ssgt">Senior Sergeant</option>
                                                                                        <option value="wo11">Warant Officer 11</option>
                                                                                        <option value="Wo1">warrant officer 1</option>
                                                                                    
                                                                                    </select>
                                                                                        <!-- <input id="rank" type="text" class="form-control @error('rank') is-invalid @enderror" name="name" value="{{ old('rank') }}" required autocomplete="rank" autofocus> -->

                                                                                </div>
                                                                            </div>

                                                                            <!-- name -->
                                                                            <div class="row mb-3">
                                                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                                                                <div class="col-md-6">
                                                                                <input type="text" name="name" value="{{$item->name}}" class="form-control">
                                                                                </div>
                                                                            </div>

                                                                            <!-- phone number -->
                                                                            <div class="row mb-3">
                                                                                <label for="phone_number" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                                                                                <div class="col-md-6">
                                                                                <input type="number" name="phone_number" value="{{$item->phone_number}}" class="form-control">
                                                                                 </div>
                                                                            </div>

                                                                            <div class="row mb-3">
                                                                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                                                                <div class="col-md-6">
                                                                                <input type="email" name="email" value="{{$item->email}}" class="form-control">
                                                                                </div>
                                                                            </div>

                                                                          

                                                                            <div class="row mb-0">
                                                                                <div class="col-md-6 offset-md-4">
                                                                                    <button type="submit" class="btn btn-primary">
                                                                                        Update User
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>  
</section>
    </div>
    
    <aside class="control-sidebar control-sidebar-dark">
    
    </aside>
  

    
    @endsection

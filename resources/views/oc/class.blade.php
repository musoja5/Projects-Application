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

     
          </div>
        </div>
      </div>
  
      
      <section class="content">
  <div class="container-fluid">
    <div class="d-flex justify-content-between flex-wrap"> <!-- Flexbox for the row -->
      <!-- Users Box -->
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

      <!-- Developers Work Box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{$systems}}</h3>
          <p class="text-white">Developers Work</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="{{ url('oc.projects') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>

      <!-- Number of Students Box -->
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

      <!-- Number of Tasks Box -->
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

      <!-- Schools Box -->
      <!-- <div class="small-box bg-primary">
        <div class="inner">
        <h3>{{$students}}</h3>
          <p class="text-white">Number of Schools</p>
        </div>
        <div class="icon">
          <i class="ion ion-university"></i>
        </div>
        <a href="{{ url('oc.task') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div> -->
    </div>
  </div>
</section>



<section class="content">
<div class="container-fluid">
                            <div class="row">
                                <div class="col min-vh-85 p-4">
                                  
                                    <div class="row justify-content-center">
                                    <body> 
                                           <h3>About Class</h3>
                                    <div id="app">
                                        <div class="col d-flex flex-column h-sm-100">
                                        
                                        <div class="col pt-4">
                                                           
                              
                             
                                <div class="col pt-4">

                                <table class="table table-bordered table-striped table-hover table-success">
                                            
                                            <thead>
                                        <tr>
                                            <th>Class Name</th>
                                            <th>Number Of Students</th>
                                            <th>Year Started</th>
                                            <th>Year to End</th>
                                            <th>Class Course Commander</th>
                                            <th> Action </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach ($studClass as $item)
                                        <tr>
                                        <td>{{ $item->class_name }}</td>
                                        <td>{{ $item->stud_number }}</td>
                                        <td>{{ $item->year }}</td>
                                        <td>{{ $item->year_end }}</td>
                                        <td>{{ $item->cse_cmd }}</td>
                                        
                                            <td>
                                            <a href="{{ url('edit-studclass/'.$item->id) }}" class="btn btn-success btn-sm" download> <i class="fa fa-book  ">  Edit</i></a>
                                            
                                            </td>
                                        
                                            <td>
                                            <a href="{{ url('del-studclass/'.$item->id) }}" class="btn btn-danger btn-sm"> <i class="fa fa-trash">  Delete</i></a>
                                            
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
</section>
    </div>
    
    <aside class="control-sidebar control-sidebar-dark">
    
    </aside>
  

    
    @endsection

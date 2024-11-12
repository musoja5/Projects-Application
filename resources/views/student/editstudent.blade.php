@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><i><b>{{ __('Welcome Oc Software') }}</b></i></div>

                <div class="card-body">
                   
                    <div class="container-fluid">
                        <div class="row flex-nowrap">
                            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                        <span class="fs-5 d-none d-sm-inline">Content</span>
                                    </a>
                                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                        <li class="nav-item">
                                            <a href="{{ url('oc.dashboard') }}" class="nav-link align-middle px-0">
                                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                                            </a>
                                        </li>
                                        <li>
                                        
                                         <a href="#" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                                <!-- <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Users</span> </a> -->
                                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                            <li class="w-100">
                                                    <a href="{{ url('oc.users') }}" class="nav-link px-0"> <span class="d-none d-sm-inline">All Users</span> view </a>
                                                </li>
                                                <li>
                                                    <a href="{{url('oc.register_user')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">Add</span> User </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{url('oc.projects')}}" class="nav-link px-0 align-middle">
                                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Projects</span></a>
                                        </li>
                                        <li>
                                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Tasks</span></a>
                                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                                <li class="w-100">
                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Students Projects</span> </a>
                                                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                                <li class="w-100">
                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Ict 05</span> </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Ict 06</span> 2</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Nduk Ict 01</span> 3</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Nduk Ict 02</span> 3</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0 align-middle">
                                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Others</span> </a>
                                        </li>
                                    </ul>
                                    <hr>
                                    <div class="dropdown pb-4">
                                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <!-- <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle"> -->
                                            <span class="d-none d-sm-inline mx-1">OC</span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                            <li><a class="dropdown-item" href="#">New project...</a></li>
                                            <li><a class="dropdown-item" href="#">Settings</a></li>
                                            <li><a class="dropdown-item" href="#">Profile</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
         <div class="col py-3">
            <div class="container">
                 <div class="row justify-content-center">
                     <body>
                      <div id="app">
                        <div class="col d-flex flex-column h-sm-100">
                         <main class="row overflow-auto">
                          <div class="col pt-4">
                                                           
                                  <h3>Developers</h3>
                                 <div class="col-md-12">
                               
                                 <!-- <a href="#" class="btn btn-success btn btn-primary float-end mb-2"><i class="fa fa-plus-square" aria-hidden="true">  Add Project</i></a>  -->
                                <a href="{{ url('oc.dashboard') }}" class="btn btn-primary float-end mb-2"><i class="fa fa-undo" aria-hidden="true">   Back to Home Page</i></a>

                             <div class="btn-group me-2" role="group" aria-label="First group">
                             </div> 

                                     <table class="table table-bordered table-striped table-hover table-success">
                                                    
                                      <thead>
                                       <tr>
                                                            
                                     <th>Project id</th>
                                        <th>Project Catgory</th>
                                        <th>Project Code</th>
                                        <th>Project Name</th>
                                        <th>Project Description</th>
                                        <th>Project Developer</th>
                                       
                                       
                                        <th>Project Documentation</th>
                                        
                                        <!-- <th>Project S.code</th>
                                        <th>Project Documentation</th> --> 
                                        <th> Action </th>
                                        <th> Action </th>
                                                                    
                                         </tr>
                                         </thead>
            <tbody>
               
            @foreach ($system as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->pcategory }}</td>
                    <td>{{ $item->pcode }}</td>
                    <td>{{ $item->pname }}</td>
                    <td> <textarea name="" id="" cols="20" rows="3"> {{ $item->pdescription }}</textarea></td>
                
                    <td>{{ $item->pdeveloper }}</td>
                   
                   
                   <!-- <td>
                    <img heigt="100" width="150" src="uploads/systems/{{ $item->file }}">
                   </td>  -->
                   <td>{{ $item->file }}</td>
                    <td>
                    <a href="{{ url('edit-system/'.$item->id) }}" class="btn btn-success btn-sm"> <i class="fa fa-book  "> Edit</i></a>
                        <!-- <a href="" class="btn btn-primary btn-sm">Edit</a> -->
                    </td>
                   
                    <td>
                    <a href="{{ url('delete-system/'.$item->id) }}" class="btn btn-danger btn-sm"> <i class="fa fa-trash">Delete</i></a>
                      
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

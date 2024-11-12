@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><i><b>Welcome Developer</b></i></div>

                <div class="card-body">
                  
                <div class="offcanvas offcanvas-start w-25" id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="false" style="background-color:rgb(255, 230, 230);">

                        <div class="offcanvas-header">
                            <h6 class="offcanvas-title d-none d-sm-block" id="offcanvas">Menu</h6>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body px-0">
                            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start" id="menu">
                                <li class="nav-item">
                                    <a href="{{url('developer.dashboard')}}" class="nav-link text-truncate">
                                        <i class="fs-5 bi-house"></i><span class="ms-1 d-none d-sm-inline">Home</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('developer.dashboard')}}" class="nav-link text-truncate">
                                        <i class="fs-5 bi-house"></i><span class="ms-1 d-none d-sm-inline">Other Developers Work</span>
                                    </a>
                                </li>
                                <li class="dropdown">
                                            <a href="#" class="nav-link dropdown-toggle  text-truncate" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fs-5 bi-bootstrap"></i><span class="ms-1 d-none d-sm-inline">My Projects</span>
                                            </a>
                                            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdown">
                                                <li><a class="dropdown-item" href="{{ url('developer.my_projects') }}">All My Work</a></li>
                                                <li><a class="dropdown-item" href="{{ url('developer.add_project') }}">Add New Project</a></li>
                                                <li><a class="dropdown-item" href="{{ url('developer.alltask') }}">My Pending Tasks</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                    </li>
                                        
                                        <li>
                                    <a href="#" class="nav-link text-truncate">
                                        <i class="fs-5 bi-grid"></i><span class="ms-1 d-none d-sm-inline">Comments</span></a>
                                </li>

                                      
                                    </ul>
                                </li>
                                
                                    <li class="dropdown">
                                            <a href="#" class="nav-link dropdown-toggle  text-truncate" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fs-5 bi-bootstrap"></i><span class="ms-1 d-none d-sm-inline">Pending Task</span>
                                            </a>
                                            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdown">
                                            
                                                <li><a class="dropdown-item" href="{{ url('developer.task') }}">Add Tasks</a></li>
                                                <li><a class="dropdown-item" href="{{ url('developer.alltask') }}">All Pending Tasks</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                    </li>
                                        
                                        <li>
                                    <a href="#" class="nav-link text-truncate">
                                        <i class="fs-5 bi-grid"></i><span class="ms-1 d-none d-sm-inline">Comments</span></a>
                                </li>

                                      
                                    </ul>
                                </li>
                               
                                <li class="dropdown">
                                            <a href="#" class="nav-link dropdown-toggle  text-truncate" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fs-5 bi-bootstrap"></i><span class="ms-1 d-none d-sm-inline">Students Projects</span>
                                            </a>
                                            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdown">
                                                 <li><a class="dropdown-item" href="{{ url('student.addclass') }}">Add Class</a></li>
                                                 <li><a class="dropdown-item" href="{{ url('student.addstudent') }}">Add Student & Work</a></li>
                                                 <li><a class="dropdown-item" href="{{ url('student.project') }}">Show student work</a></li>
                                             
                                                <li><hr class="dropdown-divider"></li>
                                    </li>


                                <li>
                                    <a href="#" class="nav-link text-truncate">
                                        <i class="fs-5 bi-people"></i><span class="ms-1 d-none d-sm-inline">Others</span> </a>
                                </li>


                                
                            </ul>
                        </div>
                    </div>
   <div class="container-fluid">
                                    <div class="row">
                                        <div class="col min-vh-85 p-4">
                                    <!-- toggler -->
                                   
                                    <button class="btn float-end btn-outline-success" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
                                       Explode <i class="bi bi-arrow-right-square-fill fs-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"></i>
                                    </button>
                                    <div class="row justify-content-center">
                                    <body> 
                                           <h3>Developers</h3><h3>1</h3>
                                    <div id="app">
                                        <div class="col d-flex flex-column h-sm-100">
                                        
                                        <div class="col pt-4">
                                                           
                              
                                 <!-- <a href="#" class="btn btn-success` btn btn-primary float-end mb-2"><i class="fa fa-plus-square" aria-hidden="true">  Add Project</i></a>  -->
                                 

                                <a href="{{ url('developer.task') }}" class="btn btn-success "><i class="fa fa-undo" aria-hidden="true">Add Task</i></a>

                                 <div class="btn-group me-2" role="group" aria-label="First group">
                                 
                            
                              
                                </div> 
                                <div class="col pt-4">

        <table class="table table-bordered table-striped table-hover table-success">
                    
                    <thead>
                <tr>
                   
                          
                            <th>Task Name</th>
                            <th>Task Description</th>
                            <th>Task Status</th>
                            <th> Action </th>
                            <th> Action </th>
                </tr>
            </thead>
            <tbody>
            @foreach ($all_tasks as $item)
                <tr>
                    
                    <td>{{ $item->task }}</td>
                   
                    
                    <td> <textarea name="" id="" cols="40" rows="4"> {{ $item->taskdes }}</textarea></td>
                
                    <td>{{ $item->status }}</td>
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
            </div>
        </div>
    
</div>
@endsection

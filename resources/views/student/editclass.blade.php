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
                                                 <li><a class="dropdown-item" href="{{ url('student.classlist') }}">About Class</a></li>
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
                                        <div class="col min-vh-100 p-4">
                                   
                                        <button class="btn float-end btn-outline-success" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
                                       Explode <i class="bi bi-arrow-right-square-fill fs-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"></i>
                                    </button>
                                    <div class="row justify-content-center">
                                    <body>
                                    <div id="app">
                                        <div class="col d-flex flex-column h-sm-100">
                                        <main class="row overflow-auto">
                                        
                                            <div class="btn-group me-2" role="group" aria-label="First group">
                                                </div> 
                                
                                    <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">

                                            @if (session('status'))
                                                <h6 class="alert alert-success">{{ session('status') }}</h6>
                                            @endif

                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Edit & Update Class</h4>
                                                    <div class="col-md-12">
                                                    <a href="{{ url('student.classlist') }}" class="btn btn-primary float-end mb-2"><i class="fa fa-undo" aria-hidden="true"> Class List</i></a>

                                                    <div class="btn-group me-2" role="group" aria-label="First group">
                                                    </div> 

                                                </div>
                                                <div class="card-body">

                                                <form action="{{ url('update-studclass/'.$item->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT') <!-- Change this to PUT method -->
                                                
                                                <!-- Form fields for class details -->
                                                <div class="row mb-12 mt-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Class Name</label>
                                                        <input type="text" class="form-control" name="class_name" value="{{ $item->class_name }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Number Of Students</label>
                                                        <input type="number" class="form-control" name="stud_number" value="{{ $item->stud_number }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Year Started</label>
                                                        <input type="date" class="form-control" name="year" value="{{ $item->year }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Year End</label>
                                                        <input type="date" class="form-control" name="year_end" value="{{ $item->year_end }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Course Commader</label>
                                                        <input type="text" class="form-control" name="cse_cmd" value="{{ $item->cse_cmd }}" required>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-md-6 offset-md-4">
                                                            <button type="submit" class="btn float-start btn-outline-success">
                                                                {{ __('Update') }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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
        </div>
    </div>
</div>
@endsection

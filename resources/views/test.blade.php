@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><i><b>Welcome Developer</b></i></div>

                <div class="card-body">
                  
                    <div class="offcanvas offcanvas-start w-25"  id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="false">
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
                                                <li><a class="dropdown-item" href="{{ url('developer.add_work') }}">Add New Project</a></li>
                                                <li><a class="dropdown-item" href="{{ url('developer.task') }}">My Pending Tasks</a></li>
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
                                            <a href="#" class="nav-link dropdown-toggle  text-truncate" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fs-5 bi-bootstrap"></i><span class="ms-1 d-none d-sm-inline">Class</span>
                                            </a>
                                            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdown">
                                               <li><a class="dropdown-item" href="#">Ict 05</a></li>
                                                <li><a class="dropdown-item" href="#">Ict 06</a></li>
                                                <li><a class="dropdown-item" href="#">Nduk Ict 01</a></li>
                                                <li><a class="dropdown-item" href="#">Nduk Ict 02</a></li>
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
                                                    <h4>Add Student</h4>
                                                    <div class="col-md-12">
                                                    <a href="{{ url('developer.dashboard') }}" class="btn btn-primary float-end mb-2"><i class="fa fa-undo" aria-hidden="true">   Back to Home Page</i></a>

                                                    <div class="btn-group me-2" role="group" aria-label="First group">
                                                    </div> 

                                                </div>
                                                <div class="card-body">

                                         <form action="{{ url('student.addstudent') }}" method="POST" enctype="multipart/form-data">
                                          @csrf
                                          <div class="row mb-12 mt-2">
                                           <label for="class" class="col-md-12 col-form-label ">Students Class</label>
                                             <div class="col-md-12">

                                                 <select name="class" id="class" required>
                                                 <option value="  # "style="font-style:italic">  - - - -Please choose student class from list below---- - -- ----</option>
                                                   
                                                         </select>
                                                 </div>
                                                 </div>
                                                 <div class="medium-12 columns">

                                                @foreach($class as $item)
                                                <div class="medium-6 columns valign">
                                                    {{ $item->class_name }}
                                                    <select name=" {{ $item->class_name }}">
                                                        @foreach($item as $item)
                                                            <option value="{{ $item->class_name }}">{{ $item->class_name  }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>                
                                                @endforeach
                                                </div>
                                        <div class="form-group col-12">
                                        <label class="control-label">Student service Number</label>
                                        <input type="number" class="form-control " name="stud_svc_no" required>
                                        </div>
                                        <div class="row mb-12 mt-2">
                                           <label for="Rank" class="col-md-12 col-form-label ">Students Rank</label>
                                             <div class="col-md-12">

                                                 <select name="rank" id="rank" required>
                                                 <option value=""style="font-style:italic">  - - - -Please choose student rank from list below---- - -- ----</option>
                                                 <option value="cpl">Senior Private</option>
                                                    <option value="cpl">Corporal</option>
                                                    <option value="sgt">Sergeant</option>
                                                         </select>
                                                 </div>
                                                 </div>

                                        
                                      

                                        <div class="form-group">
                                        <label class="control-label">Student First Name</label>
                                        <input type="text" class="form-control" name="stud_fname" required>
                                        </div>

                                        <div class="form-group">
                                        <label class="control-label">Student Last Name</label>
                                        <input type="text" class="form-control" name="stud_lname"required>
                                        </div>

                                        <div class="form-group">
                                        <label class="control-label">Student Email</label>
                                        <input type="email" class="form-control" name="stud_email" required>
                                        </div>

                                        <div class="form-group">
                                        <label class="control-label">Student Phone Number</label>
                                        <input type="number" class="form-control" name="stud_phone"required>
                                        </div>
                                        <div class="form-group">
                                            <label for="image" class="control-label">Cover Image</label>
                                            </div>
                                                            <div class="form-group">
                                            <input type="file" name="image">
                                            </div>

                                            <div class="form-group">
                                            <label for="file" class="control-label">Project Documentation</label>
                                            </div>
                                                            <div class="form-group">
                                            <input type="file" name="file">
                                            </div>
                                 

                                        <div class="row mt-2">
                                        <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn float-start btn-outline-success">
                                          {{ __('Register') }}
                                          </button>
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

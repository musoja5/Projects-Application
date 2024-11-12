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
                                        <div class="col min-vh-85 p-4">
                                    <!-- toggler -->
                                   
                                    <button class="btn float-end btn-outline-success" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
                                       Explode <i class="bi bi-arrow-right-square-fill fs-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"></i>
                                    </button>
                                    <p>A software developer is involved in the end-to-end process of creating a software program. Depending on the company where they work, a software developer will analyze the needs of the user and then create, test and develop software that will solve a problem, provide entertainment or simply make life easier for its intended audience.</p>
                                    <hr>
                                    <p>A software developer designs each piece of an application or system, and then plans how the pieces will work together. After mapping out the design, creating flowcharts and drafting out each step of the process, the developer builds diagrams and models to instruct programmers on how to write the program code. While some software developers write the code themselves instead of handing it off to a programmer, it's not a standard job requirement.

                                    </p>
                                    <hr>
                                    <p>
                                    Other job duties of a software developer include mapping out the software to keep on record for future upgrades and enhancements, as well as testing the software and collaborating with other computer specialists to make sure the software is top notch and functioning properly. In addition to developing new software programs, a software developer may also recommend upgrades for their customers’ existing software programs and systems.
                                    </p>
                                     </div>
                            </div>
                        </div>
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

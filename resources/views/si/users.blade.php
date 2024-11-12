@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-">
            <div class="card">
                <div class="card-header">{{ __('Welcome Si') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                        
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('si.school') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{ url('si.users') }}">Developers</a>
                                </li>
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Projects
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ url('si.developersprojects') }}">Developers projects</a></li>
                                   <!-- <li><a class="dropdown-item" href="#">Ict 05</a></li>
                                    <li><a class="dropdown-item" href="#">Ict 06</a></li>
                                    <li><a class="dropdown-item" href="#">Nduk Ict 01</a></li>
                                    <li><a class="dropdown-item" href="#">Nduk Ict 02</a></li> -->
                                    <!-- <li><hr class="dropdown-divider"></li> -->
                                </ul>
                                </li> 
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Projects
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <!-- <li><a class="dropdown-item" href="">Developers projects</a></li> -->
                                   <li><a class="dropdown-item" href="#">Ict 05</a></li>
                                    <li><a class="dropdown-item" href="#">Ict 06</a></li>
                                    <li><a class="dropdown-item" href="#">Nduk Ict 01</a></li>
                                    <li><a class="dropdown-item" href="#">Nduk Ict 02</a></li>
                                    <!-- <li><hr class="dropdown-divider"></li> -->
                                </ul>
                                </li>  
                            </ul>


                            <form class="d-flex">
                                <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                            </div>
                        </div>
                        </nav>
               
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
                                                                    <!-- <a href="{{url('oc.register_user')}}" class="btn btn-outline-success float-end mb-2">Add User</a> -->
                              
                                                                    <!-- <a href="#" class="btn btn-success btn btn-primary float-end mb-2"><i class="fa fa-plus-square" aria-hidden="true">  Add Project</i></a>  -->
                                                                    <a href="{{ url('si.school') }}" class="btn btn-primary float-end mb-2"><i class="fa fa-undo" aria-hidden="true">   Back to Home Page</i></a>

                                                                    <div class="btn-group me-2" role="group" aria-label="First group">
                                                                </div> 

                                                    <table class="table table-bordered table-striped table-hover table-success">
                                                    
                                                                <thead>
                                                            <tr>
                                                            
                                                                    <th>Developer id</th>
                                                                    <th>Developer svc no./id</th>
                                                                        <th>Developer Rank</th>
                                                                        <th>Developer Name</th>
                                                                        <th>Developer Telephone</th>
                                                                        <th>Developer Email</th>
                                                                        <!-- <th>Edit</th> -->
                                                                         <!-- <th>Delete</th> -->
                                                                    
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($user as $data)
                                                        <tr>
                                                            <td>{{ $data->id }}</td>
                                                            <td>{{$data->svc_no}}</td>
                                                            <td>{{ $data->rank }}</td>
                                                            <td>{{ $data->name }}</td>
                                                            <td>{{ $data->phone_number }}</td>
                                                            <td>{{ $data->email }}</td>
                                                           
                                                            <!-- <td>
                                                            <a href="{{ url('edit-user/'.$data->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                        </td> -->
                                                            <!-- <td>
                                                                <a href="{{ url('delete-user/'.$data->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                                            </td> -->
                                                            
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
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

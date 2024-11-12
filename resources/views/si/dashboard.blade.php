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
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                            </div>
                        </div>
                        </nav>
               
                        <div class="col py-3">

<hr>
   <p>Brig M D Ali holds a Master of Military operational Arts and Sciences (Air University - USAF), Bsc Military Science (Egerton University), Diploma strategic studies (UON), Certificate in Military studies (Egerton University) Electrical Technician (JKUAT), G1 Staff CSE National Defence College (Egypt), Air command & staff college (USA), G2 Staff CSE (Karen), G3 Staff CSE (AFTC)</p>
    <hr>
    <p>
    He was appointed the Principal of the Kenya Defence Forces Technical Training College (DEFTEC) on 20 July 2022. Served as the Chief of Logistics at Kenya Air force HQs from May 2021 to July 2022. Served as the Commander Logistics from Aug 2018 to July 2020. He also served as Colonel Equipment Logistics from March 2016 to July 2017. Served as the Commanding Officer Laikipia Air Base Technical Wing from July 2012 to June 2014. Served in United Nations Mission in Sudan (UNMIS) from 2005 to 2007 as well as African Union Mission in Somalia in 2012.
    </p>
    <p>Defence Forces Training College (DEFTEC) has impressive training facilities and boasts as highly trained and competent staff. It enjoys great support of the Ministry of Defence and Kenya Air Force Headquarters and has managed to produce competent and dependable manpower for the Defence Forces.</p>
<hr>



</div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

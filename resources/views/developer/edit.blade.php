@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit & Update System
                        
            <a href="{{ url('developer.my_projects') }}" class="btn btn-primary float-end mb-2"><i>Back To List</i></a>
                  
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-system/'.$item->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-12">
                            <label class="control-label">Project Category</label>
                               <input type="text" name="pcat" value="{{$item->pcat}}" class="form-control">
                        </div>

                         <div class="form-group">
                            <label class="control-label">Project Code</label>
                            <input type="text" name="pcode" value="{{$item->pcode}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Project Name</label>
                          <input type="text" name="pname" value="{{$item->pname}}" class="form-control">
                         </div>

                         <div class="form-group">
                            <label class="control-label">Project Description</label>
                            
                         </div>  <textarea cols="30" rows="3" class="form-control" name="pdescription">{{$item->pdescription}}</textarea>
                         <div class="form-group">
                            <label class="control-label">Project Developer</label>
                            <input type="text" name="pdeveloper" value="{{$item->pdeveloper}}" class="form-control">
                         </div>

                        <div class="form-group">
                            <label for="image" class="control-label">Project Old Image</label>
                            <div><img height="150" width="150" src="uploads/systems/{{ $item->image }}" alt="Current Image"></div>
                        </div>

                        <div class="form-group">
                            <input type="file" name="image">
                        </div>

                        <div class="form-group">
                            <label for="file" class="control-label">Project Documentation</label>
                        </div>
                        <div class="form-group">
                             <img heigt="150" width="150" src="uploads/systems/{{ $item->file }}">
                         </div>

                        <div class="form-group">
			                 <label for="file" class="control-label">Change Documentation</label>
                         </div>
                        <div class="form-group">
                             <input type="file" name="file">
			            </div>

                        <div class="form-group mb-3 mt-3">
                            <button type="submit" class="btn btn-primary">Update System</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

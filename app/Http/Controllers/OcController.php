<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\System;
use App\Models\Student;
use App\Models\Task;
use App\Models\StudClass;
class OcController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index()
{
    $users = User::count();
    $systems = System::count();
    $students = StudClass::sum('stud_number'); // Sum the stud_number field from all StudClass records
    $tasks = Task::count();
    
    $all_users = User::all(); // Add this to get the list of users
    
    return view('oc.users', compact('users', 'systems', 'students', 'tasks', 'all_users'));
}


public function home()
{  
    $users = User::count();     // Correctly counting users
    $systems = System::count(); // Counting systems
    $students = StudClass::sum('stud_number'); // Sum the stud_number field from all StudClass records
    $tasks = Task::count();     // Counting tasks
    
    // Passing the data to the 'oc.dashboard' view
    return view('oc.dashboard', compact('users', 'systems', 'students', 'tasks'));
}



    public function register()
    {  
        $users=User::count();// or $tasks = Task::all(); based on what you need
        $systems=System::count();
        $students = StudClass::sum('stud_number'); // Sum the stud_number field from all StudClass records
        $tasks = Task::count();
        
        return view('oc.register_user', compact('users','systems','students','tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function adduser(Request $request)
    {
        $data=new User;
        $data->svc_no = $request->input('svc_no');
        $data->rank= $request->input('rank');
        $data->role= $request->input('role');
        $data->name = $request->input('name');
        $data->phone_number = $request->input('phone_number');
        $data->email = $request->input('email');
       
        $data-> password=bcrypt($request->password);
        
        $data->save();
        
        return redirect('oc.register_user')->with('status', 'User added successfully');
    
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::count();
        $systems = System::count();
        $students = StudClass::sum('stud_number'); // Sum the stud_number field from all StudClass records
        $tasks = Task::count();
        
        $item = User::find($id); // Add this to get the list of users
        
        return view('oc.edit', compact('users', 'systems', 'students', 'tasks','item'));
        
       
       
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=User::find($id);

        $data->svc_no = $request->input('svc_no');
        $data->rank= $request->input('rank');
        $data->role= $request->input('role');
        $data->name = $request->input('name');
        $data->phone_number = $request->input('phone_number');
        $data->email = $request->input('email');
       
        
        
        $data->update();
        return redirect('oc.users')->with('status', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->back()->with('status','User Deleted Successfully');
    }

    //projects
    public function oc_projects()
    {
    $users = User::count();
    $systems = System::count();
    $students = StudClass::sum('stud_number'); // Sum the stud_number field from all StudClass records
    $tasks = Task::count();
    
    $all_systems = System::all(); // Add this to get the list of tasks
    
    return view('oc.projects', compact('users', 'systems', 'students', 'tasks', 'all_systems'));   
    }
    public function studpro()
    {  
            $users = User::count();
            $systems = System::count();
            $students = StudClass::sum('stud_number'); // Sum the stud_number field from all StudClass records
            $tasks = Task::count();
            
            $all_student = Student::all(); // Add this to get the list of tasks
            
            return view('oc.stud-project', compact('users', 'systems', 'students', 'tasks', 'all_student'));     
        
    }


    public function task()
    {
        $users = User::count();
        $systems = System::count();
        $students = StudClass::sum('stud_number'); // Sum the stud_number field from all StudClass records
        $tasks = Task::count();
        
        $all_tasks = Task::all(); // Add this to get the list of tasks
        
        return view('oc.task', compact('users', 'systems', 'students', 'tasks', 'all_tasks'));
    }
    
    

    public function list()
    {
        $users = User::count();
        $systems = System::count();
        $students = StudClass::sum('stud_number'); // Sum the stud_number field from all StudClass records
        // $students = Student::count();
        $tasks = Task::count();
        $studClass = StudClass::all();
    
        return view('oc.class', compact('users', 'systems', 'students','students', 'tasks', 'studClass'));
    }
    
   
}

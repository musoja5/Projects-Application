<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\System;
use App\Models\Student;
use App\Models\Task;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role=Auth::user()->role;

        if ($role =='1')
        {
            $users = User::count();     // Correctly counting users
            $systems = System::count(); // Counting systems
            $students = Student::count(); // Counting students
            $tasks = Task::count();     // Counting tasks
            
            // Passing the data to the 'oc.dashboard' view
            return view('oc.dashboard', compact('users', 'systems', 'students', 'tasks'));
        }

        if ($role =='2')
        {
            return view('si.dashboard');
        }

        else
        return view('developer.dashboard');
        //
    }
}

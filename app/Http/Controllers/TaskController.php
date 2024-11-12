<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\System;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
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
            $task = Task::all();
            return view('developer.alltask', compact('task'));
            //
        }
    
        public function count()
        {  
            $tasks = Task::count(); // or $tasks = Task::all(); based on what you need
            $systems=System::count();
            $users=User::count();
            return view('developer.count', compact('tasks','systems','users'));
        }
              
    public function task()
    {
        return view('developer.task');
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
    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'task' => 'required|string|max:20255',
            'taskdes' => 'required|string',
            'status' => 'required|string',
            
        ]);
    
        Task::create($validatedData);
    
        return redirect('developer.task')->with('success', 'Task created successfully.');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\System;
use App\Models\Task;
use Illuminate\Http\Request;

use PDF;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

class DeveloperController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePdfReport()
   
    {
        $systems = System::all(); // Fetch all systems
        $pdf = PDF::loadView('report.dev_pdf', compact('systems'));
        return $pdf->download('system_report.pdf');
    }
    

    public function dash()
    {
        return view('developer.dashboard');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
      {$system = System::all();
        return view('developer.my_projects', compact('system'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('developer.add_project');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $system = new System;
        $system->pcat = $request->input('pcat');
        $system->pcode = $request->input('pcode');
        $system->pname = $request->input('pname');
        $system->pdescription = $request->input('pdescription');
        $system->pdeveloper = $request->input('pdeveloper');
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/systems/'), $filename);
            $system->image = $filename;
        }
    
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/systems/'), $filename);
            $system->file = $filename;
        }
    
        $system->save();
    
        return redirect()->back()->with('status', 'Work Added Successfully');
    }
    
    



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function show(Developer $developer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $item = System::find($id);
        return view('developer.edit', compact('item'));

        //
    }
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pcat' => 'required|string|max:255',
            'pcode' => 'required|string|max:255',
            'pname' => 'required|string|max:255',
            'pdescription' => 'nullable|string',
            'pdeveloper' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file' => 'nullable|mimes:pdf,doc,docx,xls,xlsx|max:2048',
        ]);
    
        $system = System::findOrFail($id);
        $system->pcat = $request->input('pcat');
        $system->pcode = $request->input('pcode');
        $system->pname = $request->input('pname');
        $system->pdescription = $request->input('pdescription');
        $system->pdeveloper = $request->input('pdeveloper');
    
        if ($request->hasFile('image')) {
            // Remove the old image if it exists
            if ($system->image) {
                @unlink(public_path('uploads/systems/') . $system->image);
            }
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/systems/'), $filename);
            $system->image = $filename;
        }
    
        if ($request->hasFile('file')) {
            // Remove the old file if it exists
            if ($system->file) {
                @unlink(public_path('uploads/systems/') . $system->file);
            }
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/systems/'), $filename);
            $system->file = $filename;
        }
    
        $system->save();
         return redirect()->back()->with('status', 'System Updated Successfully');
    }
    
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Developer  $developer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = System::find($id);

        if (!$item) {
            return redirect()->back()->with('error', 'System not found.');
        }

        $item->delete();

        return redirect()->back()->with('status', 'System deleted successfully');
    }

    

  
}

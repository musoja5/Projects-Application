<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\StudClass;
use Illuminate\Http\Request;

use PDF;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

class StudentController extends Controller
{
    public function generatePdfReport()
    {
        $students = Student::all(); // Fetch all students
        $pdf = PDF::loadView('report.pdf', compact('students'));
        return $pdf->download('student_report.pdf');
    }
    
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
    {$student = Student::all();
        return view('Student.project', compact('student'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
   
    {
        $classes = StudClass::all(); // Fetch all class names from the database
        return view('Student.addstudent', compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'class_name' => 'required|string',
            'stud_svc_no' =>'required|string|max:6|min:5|unique:students,stud_svc_no',
            'rank' => 'required|string',
            'stud_fname' => 'required|string',
            'stud_lname' => 'required|string',
            'stud_email' => 'required|email|unique:students,stud_email',
            'stud_phone' => 'required|string|unique:students,stud_phone',
            'pname' => 'nullable|string',
            'pdescription' => 'nullable|string',
            'file' => 'nullable|file|mimes:zip,pdf,doc,docx',
        ], [
            'stud_svc_no.unique' => 'The student service number has already been taken.',
            'stud_email.unique' => 'The student email has already been taken.',
            'stud_phone.unique' => 'The student phone number has already been taken.',
        ]);
        $student= new Student;
        $student->class_name = $request->input('class_name');
        $student->stud_svc_no = $request ->input('stud_svc_no');
        $student->rank = $request ->input('rank');
        $student->stud_fname = $request ->input('stud_fname');
        $student->stud_lname = $request ->input('stud_lname');
        $student->stud_email = $request ->input('stud_email');
        $student->stud_phone = $request ->input('stud_phone');
        $student->pname = $request->input('pname');
        $student->pdescription = $request->input('pdescription');
        
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/systems/'), $filename);
            $student->file = $filename;
        }
        $student->save();
        return redirect()->back()->with('status','Student Added Successfully');
        //
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
    public function del($id)
    {
        $item = Student::find($id);
        $item->delete();
        return redirect()->back()->with('status', 'Student deleted Successfully');
    
        //
    }
}

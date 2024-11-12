<?php

namespace App\Http\Controllers;
use App\Models\StudClass;
use Illuminate\Http\Request;

use PDF;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

class ClassController extends Controller
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
        $students = Student::all(); // Fetch all students
        $pdf = PDF::loadView('reports.pdf', compact('students'));
        return $pdf->download('student_report.pdf');
    }

    public function generateWordReport()
    {
        $students = Student::all();

        $phpWord = new PhpWord();
        $section = $phpWord->addSection();

        $table = $section->addTable();
        $table->addRow();
        $table->addCell(2000)->addText('Class Name');
        $table->addCell(2000)->addText('Service No.');
        $table->addCell(2000)->addText('Rank');
        $table->addCell(2000)->addText('First Name');
        $table->addCell(2000)->addText('Last Name');
        $table->addCell(2000)->addText('Email');
        $table->addCell(2000)->addText('Phone');
        $table->addCell(2000)->addText('Project Name');
        $table->addCell(2000)->addText('Project Description');

        foreach ($students as $student) {
            $table->addRow();
            $table->addCell(2000)->addText($student->class_name);
            $table->addCell(2000)->addText($student->stud_svc_no);
            $table->addCell(2000)->addText($student->rank);
            $table->addCell(2000)->addText($student->stud_fname);
            $table->addCell(2000)->addText($student->stud_lname);
            $table->addCell(2000)->addText($student->stud_email);
            $table->addCell(2000)->addText($student->stud_phone);
            $table->addCell(2000)->addText($student->pname);
            $table->addCell(2000)->addText($student->pdescription);
        }

        $fileName = 'student_report.docx';
        $tempFile = tempnam(sys_get_temp_dir(), $fileName);
        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save($tempFile);

        return response()->download($tempFile, $fileName)->deleteFileAfterSend(true);
    }

    public function index()
    {
       return view("student.addclass");
    }
    public function list()
    
    {
        $StudClass = StudClass::all();
        return view('student.classlist', compact('StudClass'));
        //
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
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'class_name' => 'required|string',
            'stud_number' => 'required|integer',
            'year' => 'required|date',
            'year_end' => 'required|date',
            'cse_cmd' => 'required|string',
        ]);
    
        $class = new StudClass;
        $class->class_name = $request->input('class_name');
        $class->stud_number = $request->input('stud_number');
        $class->year = $request->input('year');
        $class->year_end = $request->input('year_end');
        $class->cse_cmd = $request->input('cse_cmd');
        
        $class->save();
        
        return redirect()->back()->with('status', 'Class Added Successfully');
    }
    
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       public function edit($id)
    {
        
        $item = StudClass::find($id);
        return view('student.editclass', compact('item'));

        //
    } public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'class_name' => 'required|string',
            'stud_number' => 'required|integer',
            'year' => 'required|date',
            'year_end' => 'required|date',
            'cse_cmd' => 'required|string',
        ]);
    
        // Find the class by ID and update the details
        $class = StudClass::find($id);
        if (!$class) {
            return redirect()->back()->with('status', 'Class not found');
        }
    
        $class->class_name = $request->input('class_name');
        $class->stud_number = $request->input('stud_number');
        $class->year = $request->input('year');
        $class->year_end = $request->input('year_end');
        $class->cse_cmd = $request->input('cse_cmd');
        
        $class->save();
        
        return redirect()->back()->with('status', 'Class Updated Successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = StudClass::find($id);
        $item->delete();
        return redirect()->back()->with('status','StudClass Deleted Successfully');
    }
}

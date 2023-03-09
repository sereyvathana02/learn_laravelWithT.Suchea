<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();

        return view("student", compact("student"));
    }

    public function insert()
    {
        return view("student_form");
    }

    public function create(Request $request)
    {

        $student = new Student();

        $student->student_id = $request->student_id;
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->date_of_birth = $request->date_of_birth;
        $student->father_name = $request->father_name;
        $student->mother_name = $request->mother_name;
        $student->other = $request->other;

        $student->save();

        return to_route("student.index");
    }

    public function edit($id)
    {
        $student = Student::find($id);

        return view("student_edit", compact("student"));
    }

    public function update(Request $request, $id)
    {

        $student = Student::find($id);

        $student->student_id = $request->student_id;
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->date_of_birth = $request->date_of_birth;
        $student->father_name = $request->father_name;
        $student->mother_name = $request->mother_name;
        $student->other  = $request->other;

        $student->save();

        return view("student");
    }

    public function delete($id)
    {

        $student = Student::find($id);

        $student->delete();

        return view("student");
    }
}

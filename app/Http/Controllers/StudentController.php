<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $query = Student::all();

        return view('students.index', compact('query'));
    }

    public function create()
    {
        return view('students.create');
    }
    public function store(Request $request)
    {
        // dd($request ->all());
        $createStudent = Student::create([
            'nis' => $request->nis,
            'name' => $request->name,
            'gender' => $request->gender,
            'religion' => $request->religion,
            'birth_day' => $request->irth_day,
            'class' => $request->class,
            'address' => $request->address,
        ]);

        return redirect('students');
    }


    public function delete($id)
    {
        $deleteStudent = Student::find($id);
        $deleteStudent->delete();

        return redirect('/students');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\Student;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index(Student $student)
    {
        return view('dashboard', [
            'student' => Student::get(),
        ]);
    }
    public function show(Student $student, Request $request)
    {
        return view('user', [
            'student' => Student::get(),
        ]);
    }
    public function create(Login $login, Student $student)
    {
        return view('login', [
            'login' => $login,
            'student' => $student,
        ]);
    }

    public function store(Request $request, Student $student)
    {
        $formFields = $request->validate([
            'number' => 'required',
            'password' => 'required',
        ]);
        // $sql = DB::select('select * from  student_tbl where number=' . $request->number . ' and password =' . $request->password . '');
        // dd($sql);
        if (Student::where('number', $request->number)->exists($student->number) && Student::where('password', $request->password)->exists($student->password)) {
            return redirect('/user')->with('message', ['You', 'Loggedin Successfully!']);
        } else {
            return redirect('/login')->with('message', ['Invalid', 'Contact number or Password!']);
        }
    }

}

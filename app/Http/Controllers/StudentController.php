<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Get All Details
    public function index()
    {
        return view('student.index', [
            'student' => Student::get(),
        ]);
    }

    //Get Single Details
    public function show(Student $student)
    {
        return view('student.show', [
            'student' => Student::OrderBy('id', 'Desc', 0, 1)->first()->take(1)->get(),
            // 'student' => $student,
        ]);
    }

    // Get Registration Form
    public function create()
    {
        return view('student.create');
    }

    // Store Registration details
    public function store(Request $request, Student $student)
    {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'number' => 'required',
            'gender' => 'required',
            'hobby' => 'required|array',
            'address' => 'required',
            'profile_photo' => 'required',
            'password' => 'required',
        ]);
        $formFields['profile_photo'] = $request->file('profile_photo')->store('files', 'public');
        $hobby = $request->input('hobby');
        $formFields['hobby'] = implode(',', $hobby);
        // dd($request);
        // dd($formFields);
        Student::create($formFields);
        return redirect('/login')->with('message', ['Student', 'Registered Succeddfully']);
    }

    // Get Edit Page
    public function edit(Student $student, Request $request)
    {
        $hobby = $request->input('hobby');
        $student['hobby'] = explode(',', $student->hobby);
        return view('student.edit', [
            'student' => $student,
        ]);
    }
    // Update Details
    public function update(Student $student, Request $request)
    {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'number' => 'required',
            'gender' => 'required',
            'hobby' => 'required|array',
            'address' => 'required',
            'password' => 'required',
        ]);
        if ($request->hasFile('profile_photo')) {
            $formFields['profile_photo'] = $request->file('profile_photo')->store('files', 'public');
        }
        $hobby = $request->input('hobby');
        $formFields['hobby'] = implode(',', $hobby);
        $student->update($formFields);
        return redirect('/students')->with('message', ['Student', ' Edited Successfully!']);
    }

    // Delete Details
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/students')->with('message', ['Student', ' Deleted Successfully!']);
    }
}
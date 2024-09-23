<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Group;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();

        return view('student.index', compact('students'));
    }


    public function create($group)
    {
        return view('student.create', ['group' => $group]);
    }


    public function store(Request $request, $group)
    {
        $request->validate([
            'group_id' => 'required',
            'surname' => 'required',
            'name' => 'required',
        ]);

        Student::create($request->all());

        return redirect()->route('group.show', $group)->with('success','Student of Group created successfully.');
    }


    public function show($groupId, $studentId)
    {
        $group = Group::find($groupId);
        $student = Student::find($studentId);
        $group_title = $student->group->title; 

        return view('student.show', compact('student', 'group', 'group_title'));
    }


    public function edit($groupId, $studentId)
    {
        $student = Student::find($studentId);
        $group = Group::find($groupId);

        return view('student.edit', ['group' => $group, 'student'=> $student]);
        
    }


    public function update(Request $request, $groupId, $studentId)
    {
        $request->validate([
            'group_id' => 'required'
        ]);
        echo $request;
        $student = Student::find($studentId);
        $student->update($request->all());

        return redirect()->route('student.index')
        ->with('success', 'Post updated successfully.');
    }


    public function destroy(Student $student)
    {
        //
    }
}

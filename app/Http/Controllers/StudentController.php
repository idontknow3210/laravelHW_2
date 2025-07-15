<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Group $group)
    {
        return view('students.index', ['group' => $group, 'students' => $group->students()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Group $group)
    {
        return view("students.create", ['group' => $group, "student" => new Student()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Group $group, Request $request)
    {
        $student = new Student();
        $student->name = $request->input('name');
        $student->surname = $request->input('surname');
        $student->group_id = $group->id;
        $student->save();
        return redirect("/groups/$group->id/students");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::with('group')->findOrFail($id);
        return view('students.card', ['student' => $student, "group" => $student->group]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

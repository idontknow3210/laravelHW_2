<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("groups.index", ["groups" => Group::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("groups.create", ["group" => new Group()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $group = new Group();
        $group->title = $request->input('title');
        $group->start_from = $request->input('start_from');
        $group->save();
        return redirect("groups");
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        return view('students.index', ['group' => $group, 'students' => $group->students()->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        //
    }
}

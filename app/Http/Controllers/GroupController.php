<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = DB::table('groups')->get();

        return view('group.index', ['groups' => $groups]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('group.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'start_from' => 'required',
            'is_active' => 'required',
        ]);

        Group::create($request->all());

        return redirect()->route('group.index')->with('success','Group created successfully.');
    }


    public function show($id)
    {
        $group = Group::find($id);
        $students = $group->students()->get(); 

        return view('group.show', compact('group', 'students'));

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $group = Group::find($id);
        return view('group.edit', compact('group'));
        
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'start_from' => 'required',
            'is_active' => 'required',
        ]);

        $group = Group::find($id);
        $group->update($request->all());

        return redirect()->route('group.index')
        ->with('success', 'Post updated successfully.');
    }


    public function destroy(Group $group)
    {
        //
    }
}

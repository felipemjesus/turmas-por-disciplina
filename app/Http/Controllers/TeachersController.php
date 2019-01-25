<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Teacher::all();
        }
        return view('teachers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Teacher::create($request->all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Teacher $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher, Request $request)
    {
        if ($request->ajax()) {
            return $teacher->toArray();
        }
        return view('teachers.edit', ['id' => $teacher->id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Teacher $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacher->fill($request->all());
        $teacher->save();
        return response()->json(['message' => 'Success']);
    }
}

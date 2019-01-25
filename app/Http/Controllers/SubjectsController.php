<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Subject::all();
        }
        return view('subjects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Subject::create($request->all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Subject $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject, Request $request)
    {
        if ($request->ajax()) {
            return $subject->toArray();
        }
        return view('subjects.edit', ['id' => $subject->id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Subject $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        $subject->fill($request->all());
        $subject->save();
        return response()->json(['message' => 'Success']);
    }
}

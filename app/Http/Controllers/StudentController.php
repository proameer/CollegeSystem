<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        // dd($request);
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'. $file->extension();
            $file->move(public_path('upload'), $fileName);
        }

        $student = Student::create($request->only('name', 'email','address' ,'phone','birthday','stage_id ','gender_id ','city_id ') + [
            'image' => $fileName ?? null,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}

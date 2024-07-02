<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return response()->json($courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_course' => 'required|string|max:255',
            'link_course' => 'required|string|max:255',
            'text_materi' => 'required|string',
        ]);

        $course = Course::create($request->all());
        return response()->json($course, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $id_course)
    {
        $course = Course::find($id_course);
        if (is_null($course)) {
            return response()->json(['message' => 'Course not found'], 404);
        }
        return response()->json($course);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course, $id_course)
    {
        $course = Course::find($id_course);
        if (is_null($course)) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        $request->validate([
            'judul_course' => 'sometimes|required|string|max:255',
            'link_course' => 'sometimes|required|string|max:255',
            'text_materi' => 'sometimes|required|string',
        ]);

        $course->update($request->all());
        return response()->json($course);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course, $id_course)
    {
        $course = Course::find($id_course);
        if (is_null($course)) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        $course->delete();
        return response()->json(['message' => 'Course deleted successfullyy']);
    }
}

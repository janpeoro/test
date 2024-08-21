<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'section' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'schedule' => 'required|string|max:255',
        ]);
    
        // Create a new course with the validated data
        Course::create($validatedData);
    
        // Redirect or return a response
        return redirect()->back()->with('success', 'Course created successfully!');
    }
};
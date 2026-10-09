<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return view('course.list', [
            'courses' => $courses,
        ]);
    }

    public function create()
    {
        return view('course.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->rules());

        $course = Course::create($validated);

        return redirect()
            ->route('courses.index')
            ->with('success', "Course {$course->name} created successfully!");
    }

    public function show(Course $course)
    {
        return view('course.detail', [
            'course' => $course,
        ]);
    }

    public function edit(Course $course)
    {
        return view('course.edit', [
            'course' => $course,
        ]);
    }

    public function update(Request $request, Course $course)
    {
        $validated = $request->validate($this->rules($course));

        $course->update($validated);

        return redirect()
            ->route('courses.show', $course)
            ->with('success', 'Course updated successfully!');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course deleted successfully!');
    }

    private function rules(?Course $course = null): array
    {
        return [
            'name' => 'required|string|max:255',

            'code' => [
                'required',
                'string',
                'max:50',
                Rule::unique('courses')->ignore($course?->id),
            ],

            'description' => 'nullable|string|max:1000',

            'credit_hours' => 'required|integer|min:1',
        ];
    }
}
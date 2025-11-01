<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Get All Courses
     */
    public function index()
    {
        $courses = Course::with('category')->orderBy('name', 'asc')->get();
        return $this->success($courses, 'Courses');
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
        //
    }

    /**
     * Show a course detail by id
     */
    public function show(string $courseId)
    {
        $course = Course::findOrFail($courseId);
        return $this->success($course, 'Course detail');
    }

    /**
     * Show topics for a specific course
     * @param string $courseId
     * @return \Illuminate\Http\JsonResponse
     */

    public function showTopics(string $courseId)
    {
        $topics = Course::findOrFail($courseId)->topics;
        return $this->success($topics, 'Course topics');
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

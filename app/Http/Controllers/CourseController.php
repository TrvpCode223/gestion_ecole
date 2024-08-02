<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Course::class);
        $courses = Course::all();
        return response()->json($courses);
    }

    public function show($id)
    {
        $course = Course::find($id);
        if ($course) {
            $this->authorize('view', $course);
            return response()->json($course);
        } else {
            return response()->json(['error' => 'Course not found'], 404);
        }
    }

    public function store(Request $request)
    {
        $this->authorize('create', Course::class);

        $validator = Validator::make($request->all(), [
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'classe_id' => 'required|exists:classes,id',
            'professeur_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $course = Course::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'classe_id' => $request->classe_id,
            'professeur_id' => $request->professeur_id,
        ]);

        return response()->json(['message' => 'Course created successfully', 'course' => $course], 201);
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        if ($course) {
            $this->authorize('update', $course);

            $validator = Validator::make($request->all(), [
                'titre' => 'required|string|max:255',
                'description' => 'nullable|string',
                'classe_id' => 'required|exists:classes,id',
                'professeur_id' => 'required|exists:users,id',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $course->update([
                'titre' => $request->titre,
                'description' => $request->description,
                'classe_id' => $request->classe_id,
                'professeur_id' => $request->professeur_id,
            ]);

            return response()->json(['message' => 'Course updated successfully', 'course' => $course], 200);
        } else {
            return response()->json(['error' => 'Course not found'], 404);
        }
    }

    public function destroy($id)
    {
        $course = Course::find($id);
        if ($course) {
            $this->authorize('delete', $course);
            $course->delete();
            return response()->json(['message' => 'Course deleted successfully'], 200);
        } else {
            return response()->json(['error' => 'Course not found'], 404);
        }
    }
}

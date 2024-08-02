<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\ExamResult;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ExamController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Exam::class);
        $exams = Exam::all();
        return response()->json($exams);
    }

    public function show($id)
    {
        $exam = Exam::find($id);
        if ($exam) {
            $this->authorize('view', $exam);
            return response()->json($exam);
        } else {
            return response()->json(['error' => 'Exam not found'], 404);
        }
    }

    public function store(Request $request)
    {
        $this->authorize('create', Exam::class);

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'salle' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'professor_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $exam = Exam::create($request->all());

        return response()->json(['message' => 'Exam created successfully', 'exam' => $exam], 201);
    }

    public function update(Request $request, $id)
    {
        $exam = Exam::find($id);
        if ($exam) {
            $this->authorize('update', $exam);

            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'date' => 'required|date',
                'salle' => 'required|string|max:255',
                'course_id' => 'required|exists:courses,id',
                'professor_id' => 'required|exists:users,id',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $exam->update($request->all());

            return response()->json(['message' => 'Exam updated successfully', 'exam' => $exam], 200);
        } else {
            return response()->json(['error' => 'Exam not found'], 404);
        }
    }

    public function destroy($id)
    {
        $exam = Exam::find($id);
        if ($exam) {
            $this->authorize('delete', $exam);
            $exam->delete();
            return response()->json(['message' => 'Exam deleted successfully'], 200);
        } else {
            return response()->json(['error' => 'Exam not found'], 404);
        }
    }

    public function enroll(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'etudiant_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $exam = Exam::find($id);
        if ($exam) {
            $this->authorize('enroll', $exam);
            $exam->students()->attach($request->etudiant_id);
            return response()->json(['message' => 'Student enrolled successfully'], 200);
        } else {
            return response()->json(['error' => 'Exam not found'], 404);
        }
    }

    public function results()
    {
        $user = Auth::user();
        $results = ExamResult::where('etudiant_id', $user->id)->get();
        return response()->json($results);
    }

    public function addResult(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'etudiant_id' => 'required|exists:users,id',
            'score' => 'required|numeric|min:0|max:20',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $exam = Exam::find($id);
        if ($exam) {
            $this->authorize('addResult', $exam);
            $result = ExamResult::create([
                'exam_id' => $id,
                'etudiant_id' => $request->etudiant_id,
                'score' => $request->score,
            ]);
            return response()->json(['message' => 'Result added successfully', 'result' => $result], 201);
        } else {
            return response()->json(['error' => 'Exam not found'], 404);
        }
    }

    public function updateResult(Request $request, $exam_id, $result_id)
    {
        $validator = Validator::make($request->all(), [
            'score' => 'required|numeric|min:0|max:20',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $exam = Exam::find($exam_id);
        $result = ExamResult::find($result_id);

        if ($exam && $result) {
            $this->authorize('updateResult', $exam);
            $result->update(['score' => $request->score]);
            return response()->json(['message' => 'Result updated successfully', 'result' => $result], 200);
        } else {
            return response()->json(['error' => 'Exam or result not found'], 404);
        }
    }

    public function destroyResult($exam_id, $result_id)
    {
        $exam = Exam::find($exam_id);
        $result = ExamResult::find($result_id);

        if ($exam && $result) {
            $this->authorize('deleteResult', $exam);
            $result->delete();
            return response()->json(['message' => 'Result deleted successfully'], 200);
        } else {
            return response()->json(['error' => 'Exam or result not found'], 404);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emargement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EmargementController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Emargement::class);
        $emargements = Emargement::all();
        return response()->json($emargements);
    }

    public function show($id)
    {
        $emargement = Emargement::find($id);
        if ($emargement) {
            $this->authorize('view', $emargement);
            return response()->json($emargement);
        } else {
            return response()->json(['error' => 'Emargement not found'], 404);
        }
    }

    public function store(Request $request)
    {
        $this->authorize('create', Emargement::class);

        $validator = Validator::make($request->all(), [
            'cours_id' => 'nullable|exists:cours,id',
            'exam_id' => 'nullable|exists:exams,id',
            'date' => 'required|date',
            'heure_debut' => 'required|date_format:H:i',
            'heure_fin' => 'required|date_format:H:i|after:heure_debut',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $emargement = Emargement::create($request->all());

        return response()->json(['message' => 'Emargement created successfully', 'emargement' => $emargement], 201);
    }

    public function update(Request $request, $id)
    {
        $emargement = Emargement::find($id);
        if ($emargement) {
            $this->authorize('update', $emargement);

            $validator = Validator::make($request->all(), [
                'cours_id' => 'nullable|exists:cours,id',
                'exam_id' => 'nullable|exists:exams,id',
                'date' => 'required|date',
                'heure_debut' => 'required|date_format:H:i',
                'heure_fin' => 'required|date_format:H:i|after:heure_debut',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $emargement->update($request->all());

            return response()->json(['message' => 'Emargement updated successfully', 'emargement' => $emargement], 200);
        } else {
            return response()->json(['error' => 'Emargement not found'], 404);
        }
    }

    public function destroy($id)
    {
        $emargement = Emargement::find($id);
        if ($emargement) {
            $this->authorize('delete', $emargement);
            $emargement->delete();
            return response()->json(['message' => 'Emargement deleted successfully'], 200);
        } else {
            return response()->json(['error' => 'Emargement not found'], 404);
        }
    }

    public function markPresence(Request $request, $id)
    {
        $emargement = Emargement::find($id);
        if ($emargement) {
            $this->authorize('update', $emargement);

            $validator = Validator::make($request->all(), [
                'etudiant_id' => 'required|exists:etudiants,id',
                'presence' => 'required|boolean',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $emargement->etudiants()->updateExistingPivot($request->etudiant_id, ['presence' => $request->presence]);

            return response()->json(['message' => 'Presence marked successfully'], 200);
        } else {
            return response()->json(['error' => 'Emargement not found'], 404);
        }
    }
}

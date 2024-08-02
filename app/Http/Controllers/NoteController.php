<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NoteController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Note::class);
        $notes = Note::all();
        return response()->json($notes);
    }

    public function show($id)
    {
        $note = Note::find($id);
        if ($note) {
            $this->authorize('view', $note);
            return response()->json($note);
        } else {
            return response()->json(['error' => 'Note not found'], 404);
        }
    }

    public function store(Request $request)
    {
        $this->authorize('create', Note::class);

        $validator = Validator::make($request->all(), [
            'note' => 'required|numeric|min:0|max:20',
            'etudiant_id' => 'required|exists:users,id',
            'cours_id' => 'required|exists:courses,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $data = [
            'note' => $request->note,
            'etudiant_id' => $request->etudiant_id,
            'cours_id' => $request->cours_id,
        ];

        if (Auth::user()->role === 'administrateur') {
            $data['administrateur_id'] = Auth::id();
            $data['professeur_id'] = null;
        } elseif (Auth::user()->role === 'professeur') {
            $data['professeur_id'] = Auth::id();
            $data['administrateur_id'] = null;
        }

        $note = Note::create($data);

        return response()->json(['message' => 'Note created successfully', 'note' => $note], 201);
    }

    public function update(Request $request, $id)
    {
        $note = Note::find($id);
        if ($note) {
            $this->authorize('update', $note);

            $validator = Validator::make($request->all(), [
                'note' => 'required|numeric|min:0|max:20',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $note->update([
                'note' => $request->note,
            ]);

            return response()->json(['message' => 'Note updated successfully', 'note' => $note], 200);
        } else {
            return response()->json(['error' => 'Note not found'], 404);
        }
    }

    public function destroy($id)
    {
        $note = Note::find($id);
        if ($note) {
            $this->authorize('delete', $note);
            $note->delete();
            return response()->json(['message' => 'Note deleted successfully'], 200);
        } else {
            return response()->json(['error' => 'Note not found'], 404);
        }
    }
}

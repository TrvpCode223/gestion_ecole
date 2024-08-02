<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Gate;

class ClasseController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Classe::class);
        $classes = Classe::all();
        return response()->json($classes);
    }

    public function show($id)
    {
        $classe = Classe::find($id);
        if ($classe) {
            $this->authorize('view', $classe);
            return response()->json($classe);
        } else {
            return response()->json(['error' => 'Classe non trouvée'], 404);
        }
    }

    public function store(Request $request)
    {
        $this->authorize('create', Classe::class);

        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'professeur_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $classe = Classe::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'professeur_id' => $request->professeur_id,
        ]);

        return response()->json(['message' => 'Classe créée avec succès', 'classe' => $classe], 201);
    }

    public function update(Request $request, $id)
    {
        $classe = Classe::find($id);
        if ($classe) {
            $this->authorize('update', $classe);

            $validator = Validator::make($request->all(), [
                'nom' => 'required|string|max:255',
                'description' => 'nullable|string',
                'professeur_id' => 'required|exists:users,id',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $classe->update([
                'nom' => $request->nom,
                'description' => $request->description,
                'professeur_id' => $request->professeur_id,
            ]);

            return response()->json(['message' => 'Classe mise à jour avec succès', 'classe' => $classe], 200);
        } else {
            return response()->json(['error' => 'Classe non trouvée'], 404);
        }
    }

    public function destroy($id)
    {
        $classe = Classe::find($id);
        if ($classe) {
            $this->authorize('delete', $classe);
            $classe->delete();
            return response()->json(['message' => 'Classe supprimée avec succès'], 200);
        } else {
            return response()->json(['error' => 'Classe non trouvée'], 404);
        }
    }

    public function addStudent(Request $request, $classe_id)
    {
        $classe = Classe::find($classe_id);
        if ($classe) {
            $this->authorize('update', $classe);

            $validator = Validator::make($request->all(), [
                'etudiant_id' => 'required|exists:users,id',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $classe->etudiants()->attach($request->etudiant_id);
            return response()->json(['message' => 'Étudiant ajouté à la classe avec succès'], 200);
        } else {
            return response()->json(['error' => 'Classe non trouvée'], 404);
        }
    }

    public function removeStudent(Request $request, $classe_id)
    {
        $classe = Classe::find($classe_id);
        if ($classe) {
            $this->authorize('update', $classe);

            $validator = Validator::make($request->all(), [
                'etudiant_id' => 'required|exists:users,id',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $classe->etudiants()->detach($request->etudiant_id);
            return response()->json(['message' => 'Étudiant retiré de la classe avec succès'], 200);
        } else {
            return response()->json(['error' => 'Classe non trouvée'], 404);
        }
    }
}

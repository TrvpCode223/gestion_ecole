<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NotificationController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $notifications = Notification::where('user_id', $user->id)->get();
        return response()->json($notifications);
    }

    public function show($id)
    {
        $notification = Notification::find($id);
        if ($notification) {
            $this->authorize('view', $notification);
            return response()->json($notification);
        } else {
            return response()->json(['error' => 'Notification non trouvée'], 404);
        }
    }

    public function store(Request $request)
    {
        $this->authorize('create', Notification::class);

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'message' => 'required|string',
            'user_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $notification = Notification::create([
            'title' => $request->title,
            'message' => $request->message,
            'user_id' => $request->user_id,
        ]);

        return response()->json(['message' => 'Notification créée avec succès', 'notification' => $notification], 201);
    }

    public function update(Request $request, $id)
    {
        $notification = Notification::find($id);
        if ($notification) {
            $this->authorize('update', $notification);

            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
                'message' => 'required|string',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $notification->update([
                'title' => $request->title,
                'message' => $request->message,
            ]);

            return response()->json(['message' => 'Notification mise à jour avec succès', 'notification' => $notification], 200);
        } else {
            return response()->json(['error' => 'Notification non trouvée'], 404);
        }
    }

    public function destroy($id)
    {
        $notification = Notification::find($id);
        if ($notification) {
            $this->authorize('delete', $notification);
            $notification->delete();
            return response()->json(['message' => 'Notification supprimée avec succès'], 200);
        } else {
            return response()->json(['error' => 'Notification non trouvée'], 404);
        }
    }
}

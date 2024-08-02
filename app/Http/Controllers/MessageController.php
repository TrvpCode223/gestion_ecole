<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $messages = Message::where('receiver_id', $user->id)
                            ->orWhere('sender_id', $user->id)
                            ->get();
        return response()->json($messages);
    }

    public function show($id)
    {
        $message = Message::find($id);
        if ($message) {
            $this->authorize('view', $message);
            return response()->json($message);
        } else {
            return response()->json(['error' => 'Message not found'], 404);
        }
    }

    public function store(Request $request)
    {
        $this->authorize('create', Message::class);

        $validator = Validator::make($request->all(), [
            'receiver_id' => 'required|exists:users,id',
            'content' => 'required|string|max:1000',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $message = Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'content' => $request->content,
        ]);

        return response()->json(['message' => 'Message sent successfully', 'data' => $message], 201);
    }

    public function destroy($id)
    {
        $message = Message::find($id);
        if ($message) {
            $this->authorize('delete', $message);
            $message->delete();
            return response()->json(['message' => 'Message deleted successfully'], 200);
        } else {
            return response()->json(['error' => 'Message not found'], 404);
        }
    }
}

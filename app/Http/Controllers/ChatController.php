<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Modules\Student\Models\Student;
use App\Modules\Teacher\Models\Teacher;
use App\Events\MessageSent;
use App\Models\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('welcome', compact('users'));
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'nullable|string',
            'file' => 'nullable|file|max:10240'
        ]);

        $filePath = null;

        if ($request->hasFile('file')) {
            $filePath = $request->file('file')
                ->store('chat-files', 'public');
        }

        $message = Message::create([
            'user_id' => auth()->id() ?? collect(User::pluck('id'))->random(),
            'message' => $request->message,
            'file_path' => $filePath
        ]);

        broadcast(new MessageSent($message))->toOthers();

        return response()->json([
            'status' => true,
            'data' => $message
        ]);
    }

    public function loadMessages($receiverId)
    {
        $messages = Message::where('receiver_id', $receiverId)->get();
        return json_encode($messages);
    }
}

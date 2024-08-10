<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Post;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MessageAdminController extends Controller
{
    public function index()
    {
        $messages = Message::latest();
        return view('admin.message.index', compact('messages'));
    }

    public function destroy(Message $message) {
        $message->delete();
        return redirect()->route('admin.message.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Services\Notifications\NotificationFactory;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function send(Request $request, NotificationFactory $factory) {
        $data = $request->validate([
            'type' => 'required|string',
            'message' => 'required|string',
            'recipient' => 'required|string'
        ]);

        try {
            $sender = $factory->make($data['type']);
            $sender->send($data['message'], $data['recipient']);
            return response()->json([
                'status' => 'success',
                'message' => 'Notification processed!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 400);
        }
    }
}

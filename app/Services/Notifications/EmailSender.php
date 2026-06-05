<?php

namespace App\Services\Notifications;

use Illuminate\Support\Facades\Log;


class EmailSender implements NotificationSenderInterface {
    public function send(string $message, string $recipient): void {
        Log::info("Email message {$message} will be sent to {$recipient}");
    }
}
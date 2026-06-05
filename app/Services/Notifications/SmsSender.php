<?php

namespace App\Services\Notifications;

use Illuminate\Support\Facades\Log;

class SmsSender implements NotificationSenderInterface {
    public function send(string $message, string $recipient): void {
        Log::info("SMS message {$message} will be sent to {$recipient}");
    }
}
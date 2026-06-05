<?php

namespace App\Services\Notifications;

class NotificationFactory {
    public function make(string $type): NotificationSenderInterface {
        return match ($type) {
            "sms" => new SmsSender(),
            "email" => new EmailSender(),
            default => throw new \Exception("This type is not supported")
        };
    }
}
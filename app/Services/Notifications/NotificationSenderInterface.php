<?php

namespace App\Services\Notifications;

interface NotificationSenderInterface {
    public function send(string $message, string $recipient): void;
}
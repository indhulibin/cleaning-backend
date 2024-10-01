<?php

namespace App\Services;

use Twilio\Rest\Client;

class TwilioService
{
    protected $twilio;

    public function __construct()
    {
        // Initialize the Twilio Client with credentials from the config
        $this->twilio = new Client(config('twilio.sid'), config('twilio.auth_token'));
    }

    public function sendSms($to, $message)
    {
        try {
            return $this->twilio->messages->create($to, [
                'from' => config('twilio.phone_number'),
                'body' => $message,
            ]);
        } catch (\Exception $e) {
            \Log::error('Twilio SMS failed: ' . $e->getMessage());
            return false;
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
class SMSController extends Controller
{
    public function sendSMS(Request $request)
    {
        // Get the receiver phone number from request (or set it statically for testing)
        $receiverPhoneNumber = $request->input('phone_number', 'recipient_phone_number');

        // Twilio credentials from the .env file
        $sid = env('TWILIO_SID');
        $token = env('TWILIO_AUTH_TOKEN');
        $twilioPhoneNumber = env('TWILIO_PHONE_NUMBER');

        // Create a Twilio client
        $client = new Client($sid, $token);

        try {
            // Send SMS
            $client->messages->create(
                $receiverPhoneNumber, // Receiver's phone number
                [
                    'from' => $twilioPhoneNumber, // Twilio phone number
                    'body' => 'This is a test SMS sent using Twilio from Laravel!'
                ]
            );

            // Return success response
            return response()->json(['message' => 'SMS sent successfully!']);
        } catch (\Exception $e) {
            // Handle errors
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

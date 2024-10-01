<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\TimeSlot;
use App\Models\Booked;
use App\Models\Client;
use DateTime;
use App\Services\TwilioService;

class HomeController extends Controller
{
    public function index()
    {
        return view("front.index");
    }

    public function booking()
    {
         // Retrieve client details from session
        $clientDetails = Session::get('client_details');

        // Pass the client details to the view
        return view("front.booking", compact('clientDetails'));
    }

    public function get_time(Request $request)
    {
        $appointment_date = DateTime::createFromFormat('d/m/Y', $request->appointment_date)->format('Y-m-d');
    $bookedTimeSlots = Booked::where('appointment_date', $appointment_date)->pluck('time_id')->toArray();
    $availableTimeSlots = TimeSlot::whereNotIn('id', $bookedTimeSlots)->get();
    return response()->json($availableTimeSlots);
    }

    protected $twilio;

    // Constructor to inject the TwilioService
    public function __construct(TwilioService $twilio)
    {
        $this->twilio = $twilio;
    }

    public function bookingSubmission(Request $request)
    {
        
        $appointment_date = DateTime::createFromFormat('d/m/Y', $request->appointment_date)->format('Y-m-d');
        $extras = $request->input('extras', []);
        $extraNeeds = implode(',', $extras);
        
        $booked = new Booked;        
        $booked->time_id = $request->time_id;
        $booked->appointment_date =$appointment_date;
        $booked->is_booked = true; 
        $booked->save();


        $client = new Client;
        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->type = $request->type;
        $client->bedroom = $request->bedroom;
        $client->bathroom = $request->bathroom;
        $client->extraNeeds = $extraNeeds;
        $client->requriments = $request->requirements;         
        $client->time_id = $request->time_id;
        $client->appointment_date =$appointment_date;
        $client->is_booked = true; 
        $client->save();

       

        if ($client && $booked) {

            $userPhone = '+'.$request->phone;
            $adminPhone = config('twilio.admin_phone_number');
            $appointmentDate = $request->input('appointment_date');
    
            // Send SMS to the user
            $this->twilio->sendSms($userPhone, "Your appointment is confirmed for $appointmentDate.");
    
            // Send SMS to the admin
            $this->twilio->sendSms($adminPhone, "A new appointment is booked for $appointmentDate.");
        }
             
        // Store client details in session
        Session::put('client_details', $client->toArray());

        // Step 5: Return a response or redirect
        return redirect()->back()->with('success', 'Appointment booked successfully.');

    }

    
}

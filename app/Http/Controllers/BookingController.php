<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function book(Request $request){
        if ($request->ajax()) {
            $output = '';
            $book = Booking::create([
                'origin' => $request->origin,
                'destination' => $request->destination,
                'distance' => $request->distance,
                'price' => $request->price,
                'type' => $request->carrier,
                'user_id' => $request->user_id,
                'time' => $request->time,
                'amPm' => $request->timeslot,
            ]);
            return response($output);
        }
    }
}

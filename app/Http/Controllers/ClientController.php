<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index(){
        if (Auth::check()) {
            $user = User::find(Auth::id());
            return view('client.welcome', [
                'user' => $user
            ]);
        }
        else {
            return redirect(url('/'));
        }

    }
    public function getCarrierPrice($id){
        $distance = $id;
        return view('client.carriers',[
            'distance'=>$distance
        ]);
    }
    public function test(){
        $user = User::find(Auth::id());
        return view('client.test',[
            'user'=>$user
        ]);
    }
    public function driverDetail(){
        return view('client.driverDetail');
    }
    public function search(){
        $bookings = Booking::where('user_id',Auth::id())->where('status','!=',2)->latest('id')->get();
        return view('client.searchCarrier',[
            'bookings'=>$bookings
        ]);
    }
    public function carrierDetail($id){
        $booking = Booking::find($id);
        return view('client.carrierDetails',[
            'booking'=>$booking
        ]);
    }
    public function message(){
        return view('client.message');
    }
    public function success(){
        return view('client.success');
    }
    public function invoice(){
        return view('client.invoice');
    }
    public function invoiceView(){
        return view('client.invoiceView');
    }
    public function location(Request $request){
        if ($request->ajax()){
            $updateLocation = User::find($request->user_id);
            $updateLocation->originLat = $request->lat;
            $updateLocation->originLng = $request->lng;
            $updateLocation->save();
        }
    }
    public function successRides(){
        $bookings = Booking::where('user_id',Auth::id())->where('status',2)->latest('id')->get();
        return view('client.history',[
            'bookings'=>$bookings
        ]);
    }
    public function successDetails($id){
        $booking = Booking::find($id);
        $client = User::find($booking->user_id);
        return view('client.successDetails',[
            'booking'=>$booking,
            'client'=>$client
        ]);
    }
}

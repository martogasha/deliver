<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pusher\Pusher;

class DriverController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return view('driver.index');
        }
        else{
            return redirect(url('/'))->with('error','Session Expired');
        }
    }
    public function clientList(){
        $bookings = Booking::where('carrier_id',null)->latest('id')->get();
        return view('driver.clientList',[
            'bookings'=>$bookings
        ]);
    }
    public function acceptedRequest(){
        $bookings = Booking::where('carrier_id','!=',null)->where('carrier_id',Auth::id())->where('status','!=',2)->latest('id')->get();
        return view('driver.acceptedRequest',[
            'bookings'=>$bookings
        ]);
    }
    public function checkIn(Request $request){
        $updateStatus = Booking::where('id',$request->booking_id)->update(['status'=>1]);
        return redirect(url('acceptedRequest'))->with('success','CHECKED IN');
    }
    public function checkOut(Request $request){
        $updateStatus = Booking::where('id',$request->booking_id)->update(['status'=>2]);
        return redirect(url('acceptedRequest'))->with('success','CHECKED OUT');
    }
    public function clientDetails($id){
        $booking = Booking::find($id);
        return view('driver.clientDetails',[
            'booking'=>$booking
        ]);
    }
    public function takeRequest(Request $request){
        if ($request->ajax()){
            $carrierId = Auth::id();
            $updateCarrierId = Booking::where('id',$request->booking_id)->update(['carrier_id'=>($carrierId)]);
        }
        $options = array(
            'cluster'=>'ap2',
            'useTLS'=>true
        );
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );
        $data = ['carrier_id'=>$carrierId];
        $pusher->trigger('my-channel','my-event', $data);
        return $carrierId;
    }
    public function successRequest(){

    }
}

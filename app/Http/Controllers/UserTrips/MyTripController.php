<?php

namespace App\Http\Controllers\UserTrips;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\HotelBooking;
use App\Models\FlightBooking;

class MyTripController extends Controller
{
    //  عرض جميع الرحلات والحجوزات الخاصة بالمستخدم
    public function index()
    {
        $userId = Auth::id();

        $hotelBookings = HotelBooking::with(['hotel', 'room'])
            ->where('user_id', $userId)
            ->get();   

        $flightBookings = FlightBooking::with('flight')
            ->where('user_id', $userId)
            ->get();

        return response()->json([
            'status' => true,
            'message' => 'User trips fetched successfully',
            'data' => [
                'hotel_bookings' => $hotelBookings,
                'flight_bookings' => $flightBookings,
            ],
        ]);
    }
}

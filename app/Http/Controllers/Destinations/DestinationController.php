<?php

namespace App\Http\Controllers\Destinations;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::select('id', 'name', 'country', 'description', 'image', 'average_rating', 'category')
            ->orderByDesc('average_rating')
            ->paginate(10);

        return response()->json($destinations);
    }

    
    //   عرض وجهة معينة بالتفصيل.  
    public function show($id)
{
    $destination = Destination::with([
        'hotels',
        'restaurants',
        'attractions',
        'reviews.user'
    ])->find($id);

    if (!$destination) {
        return response()->json([
            'status' => false,
            'message' => 'Destination not found'
        ], 404);
    }

    return response()->json([
        'status' => true,
        'message' => 'Destination details',
        'data' => $destination
    ]);
}

}

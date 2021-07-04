<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getHotelDetailsById($id)
    {
        $hotel = Hotel::where('id', $id)->first();
        dd($hotel);
    }
}

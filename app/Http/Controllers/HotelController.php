<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\HotelFacilityList;
use App\Models\HotelHashtagList;
use App\Models\Review;
use App\Models\Room;

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
        $hotel_facility_lists = HotelFacilityList::where('facility_list_id', $hotel->facility_list_id)->get();
        $hotel_hashtag_lists = HotelHashtagList::where('hashtag_list_id', $hotel->hashtag_list_id)->get();
        $rooms = Room::where('hotel_id', $hotel->id)->get();
        $reviews = Review::where('hotel_id', $hotel->id)->get();

        dd($hotel_facility_lists);

        $hotel_facility_list = array();
        foreach ($hotel_facility_lists as $list) {
            array_push($hotel_facility_list, array('id' => $list->facilities->id, 'name' => $list->facilities->name));
        }

        $hotel_hashtag_list = array();
        foreach ($hotel_hashtag_lists as $list) {
            array_push($hotel_hashtag_list, array('id' => $list->hashtags->id, 'name' => $list->hashtags->name, 'code' => $list->hashtags->code));
        }

        $total_reviews = array('rating_avg' => Review::where('hotel_id', $hotel->id)->avg('rating'), 'count' => Review::where('hotel_id', $hotel->id)->count());

        $review = array();
        foreach ($reviews as $list) {
            array_push($review, array(
                'user_name' => $list->users->name,
                'rating' => $list->rating,
                'description' => $list->description
            ));
        }

        return response()->json([
            'data' => [
                'hotel' => $hotel,
                'hotel_facility' => $hotel_facility_list,
                'hotel_hashtag' => $hotel_hashtag_list,
                'room' => $rooms,
                'total_reviews' => $total_reviews,
                'review_list' => $review
            ],
            'success' => true
        ], 200);
    }
}

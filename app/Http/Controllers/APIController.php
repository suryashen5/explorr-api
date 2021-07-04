<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Hotel_Hashtag;
use DB;
use stdClass;

class APIController extends Controller
{
    public function index(Request $request)
    {
        $code = $request->get('code');
        
        $hashtags = DB::table('hashtags')->join('hotel_hashtag_lists','hashtags.id','=','hotel_hashtag_lists.hashtag_id')->select(DB::raw("COUNT(*), hotel_hashtag_lists.hashtag_list_id, hashtags.id, hashtags.name, hashtags.code"))->groupBy("hashtags.id")->orderByDesc('COUNT(*)')->get();
        
        $temp_hashtags = [];
        foreach($hashtags as $hashtag => $tag){
            array_push($temp_hashtags, $tag->code);
        }
        $result = new stdClass;
        $result->hashtag_list = $temp_hashtags;
        
        if ($code == null){
            $hotel_lists = DB::table('hotel_hashtag_lists')
            ->join('hotels', 'hotel_hashtag_lists.hashtag_list_id', '=', 'hotels.hashtag_list_id')
            ->join('rooms', "rooms.hotel_id", '=', 'hotels.id')
            ->join('reviews',"reviews.hotel_id",'=','hotels.id')
            ->select(DB::raw("hotels.id as id, hotels.name as name, AVG(reviews.rating) as average_score,
                 COUNT(reviews.id) as total_reviews, MIN(rooms.price) as price"))
            ->where('hotel_hashtag_lists.hashtag_id', $hashtags[0]->id)
            ->groupBy("hotels.id")->get();
        } else {
            $hotel_lists = DB::table('hotel_hashtag_lists')
            ->join('hotels', 'hotel_hashtag_lists.hashtag_list_id', '=', 'hotels.hashtag_list_id')
            ->join('hashtags','hashtags.id','=','hotel_hashtag_lists.hashtag_id')
            ->join('rooms', "rooms.hotel_id", '=', 'hotels.id')
            ->join('reviews',"reviews.hotel_id",'=','hotels.id')
            ->select(DB::raw("hotels.id as id, hotels.name as name, AVG(reviews.rating) as average_score,
                 COUNT(reviews.id) as total_reviews, MIN(rooms.price) as price"))
            ->where('hashtags.code', $code)
            ->groupBy("hotels.id")->get();
        }

        $hotels=[];
        foreach($hotel_lists as $hotel){
            $temp_hashtags =  DB::table('hashtags')
            ->join('hotel_hashtag_lists','hashtags.id','=','hotel_hashtag_lists.hashtag_id')
            ->join('hotels', 'hotel_hashtag_lists.hashtag_list_id', '=', 'hotels.hashtag_list_id')
            ->select(DB::raw("hashtags.name, hotel_hashtag_lists.hashtag_id"))
            ->where('hotels.id',$hotel->id)
            ->distinct()
            ->get();

            $images = DB::table('photos')
            ->join('hotels','photos.hotel_id','=','hotels.id')
            ->select(DB::raw("photos.path, photos.hotel_id"))
            ->where('photos.hotel_id',$hotel->id)
            ->first();
            
            $hashtag_list = json_decode(json_encode($temp_hashtags), true);
            $hotel->hashtags=$hashtag_list;
            $hotel->image=$images;
            $hotel = json_decode(json_encode($hotel), true);
            array_push($hotels,$hotel);
        }

        if ($code == null){
            $result->current_hashtag = $hashtags[0]->code;
        } else {
            $result->current_hashtag = $code;
        }
        $result->hotel_list = $hotels;
        return response()->json($result);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Hotel_Hashtag;
use DB;
use stdClass;

class APIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hashtags = DB::table('hashtags')->join('hotel_hashtag_lists','hashtags.id','=','hotel_hashtag_lists.hashtag_id')->select(DB::raw("COUNT(*), hotel_hashtag_lists.hashtag_list_id, hashtags.id, hashtags.name, hashtags.code"))->groupBy("hashtags.id")->orderByDesc('COUNT(*)')->get();
        
        $temp_hashtags = [];
        foreach($hashtags as $hashtag => $tag){
            array_push($temp_hashtags, $tag->name);
        }
        $result = new stdClass;
        $result->hashtag_list = $temp_hashtags;
        
        $hotel_lists = DB::table('hotel_hashtag_lists')
        ->join('hotels', 'hotel_hashtag_lists.hashtag_list_id', '=', 'hotels.hashtag_list_id')
        ->join('rooms', "rooms.hotel_id", '=', 'hotels.id')
        ->join('reviews',"reviews.hotel_id",'=','hotels.id')
        ->select(DB::raw("hotels.id as id, hotels.name as name, AVG(reviews.rating) as average_score,
             COUNT(reviews.id) as total_reviews, MIN(rooms.price) as price"))
        ->where('hotel_hashtag_lists.hashtag_id', $hashtags[0]->id)
        ->groupBy("hotels.id")->get();

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

        $result->current_hashtag = $hashtags[0]->code;
        $result->hotel_list = $hotels;
        return response()->json($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

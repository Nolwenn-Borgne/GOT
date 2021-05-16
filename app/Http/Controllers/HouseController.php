<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\House;
use Illuminate\Support\Facades\DB;

class HouseController extends Controller
{
    public function index()
    {
        $houses = House::all();
        //dump($character);

        return view('houses', ['houses' => $houses]);
    }

    public function item($id)
    {
        $house = House::find($id)->load('characters');
        // dump($house);
        $characters = $house->characters;
        // dump($characters);
        return view('house', ['house' => $house, 'characters' => $characters]);
    }
}

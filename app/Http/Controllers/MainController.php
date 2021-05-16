<?php

namespace App\Http\Controllers;

use App\Models\Character;
//use App\Models\Task;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function home()
    {
        $characters = Character::all()->load('houses');
        // dump($characters);

        return view('home', ['characters' => $characters]);

    }

}

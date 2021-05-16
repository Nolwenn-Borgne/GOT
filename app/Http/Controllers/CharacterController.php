<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Support\Facades\DB;

class CharacterController extends Controller
{
    public function item($id)
    {
        $character = Character::find($id)
            ->load('title')
            ->load('mother')
            ->load('father')
            ->load('houses');
        //dump($character);

        return view('biography', ['character' => $character]);
    }
    //
}

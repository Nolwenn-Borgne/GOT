<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'house';

    public function characters()
    {
        return $this->belongsToMany(Character::class, 'house_has_characters', 'house', 'character');

    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'character';

    public function title()
    {
        return $this->hasOne(Title::class, 'id', 'id_title');
    }

    public function mother()
    {
        return $this->hasOne(Character::class, 'id', 'mother_id');
    }

    public function father()
    {
        return $this->hasOne(Character::class, 'id', 'father_id');
    }

    public function houses()
    {
        return $this->belongsToMany(House::class, 'house_has_characters', 'character', 'house');

    }
}

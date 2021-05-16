<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'title';

    public function character()
    {
        return $this->hasMany(Character::class, 'id_title');
    }
}

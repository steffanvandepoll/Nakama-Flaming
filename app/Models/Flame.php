<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flame extends Model 
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'flames';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'type_ids', 'champion_ids', 'filepath'];
}

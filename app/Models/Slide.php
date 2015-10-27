<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model 
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'slides';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['id', 'description', 'filepath', 'flame_id'];
}

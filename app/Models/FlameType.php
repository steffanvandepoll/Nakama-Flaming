<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlameType extends Model 
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'flametypes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type', 'icon', 'description', 'color'];
}

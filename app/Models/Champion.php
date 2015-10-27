<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Champion extends Model 
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'champions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'nickname', 'filename'];
}

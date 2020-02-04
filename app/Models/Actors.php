<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
    //

    protected $table ='actors';

    protected $fillable=['name'];

    public function movies()
    {
        return $this->belongsToMany(Movies::class);
    }
}

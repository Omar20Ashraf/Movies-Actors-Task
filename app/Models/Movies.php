<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    //

    protected $table ='movies';

    protected $fillable=['name'];

    public function actors()
    {
        return $this->belongsToMany(Actors::class);
    }
}

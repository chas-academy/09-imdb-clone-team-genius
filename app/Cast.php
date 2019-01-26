<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    public function movies()
    {
        return $this->hasMany(Movie::class);
    }

    public function series()
    {
        return $this->hasMany(Series::class);
    }
}

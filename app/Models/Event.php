<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends Model
{

    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }
}

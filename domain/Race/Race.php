<?php

namespace Domain\Race;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $fillable = [
      'type',
      'starts_at'
    ];

    /**
     * The roles that belong to the user.
     */
    public function runners()
    {
        return $this->belongsToMany('Domain\Runner\Runner')->withTimestamps();
    }
}

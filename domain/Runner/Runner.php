<?php

namespace Domain\Runner;

use Illuminate\Database\Eloquent\Model;

class Runner extends Model
{
    protected $fillable = [
      'name',
      'cpf',
      'born_at'
    ];

    /**
     * The roles that belong to the user.
     */
    public function races()
    {
        return $this->belongsToMany('Domain\Race\Race')->withTimestamps();
    }
}
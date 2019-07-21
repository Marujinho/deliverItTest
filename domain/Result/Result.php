<?php

namespace Domain\RaceRunner;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
      'runner_id',
      'race_id',
      'started_at',
      'finished_at'
    ];
}

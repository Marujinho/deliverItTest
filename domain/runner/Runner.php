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
}

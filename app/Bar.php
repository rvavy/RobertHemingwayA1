<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{
    protected $fillable = [
      'name',
      'street',
      'information'
    ];

    public $timestamps = false;
    protected $table = 'bars';
}

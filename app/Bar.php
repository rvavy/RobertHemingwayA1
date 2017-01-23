<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// My modal for the Bar.

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

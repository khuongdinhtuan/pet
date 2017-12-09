<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Zodiac extends Model
{
    use SoftDeletes;

    protected $table = 'zodiacs';

    protected $fillable = [
      'name',
      'start_date',
      'end_date'
    ];
}

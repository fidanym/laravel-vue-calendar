<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Event extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'events';

    protected $fillable = [
        'title', 'description','start', 'end'
    ];
}

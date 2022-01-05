<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    // To prevent timestamp columns in database
    protected $timestamps = false;

    // Set Variables for model
    protected $fillable = [
        'id',
        'name',
        'date',
        'hostName',
        'location',
        'showOrder',
        'active',
        'eventLengthInHours',
        'seatCost',
        'eventSize'
    ];

    use HasFactory;
}

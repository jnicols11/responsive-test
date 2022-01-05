<?php

namespace App\Data;

use App\Models\Event;

class EventDAO
{
    public static function getAllEvents()
    {
        return Event::all();
    }
}

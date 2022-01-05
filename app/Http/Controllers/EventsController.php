<?php

namespace App\Http\Controllers;

use App\Data\EventDAO;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function getEvents()
    {
        $events = EventDAO::getAllEvents();

        return view('events', compact($events));
    }
}

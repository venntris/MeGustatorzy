<?php

namespace App\Http\Controllers;
use App\DeGustator\Repository\Repository;
use App\DeGustator\Gateway\Gateway;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function __construct(Repository $Repository, Gateway $Gateway)
    {
        /* $this->middleware('auth');*/
        $this->R = $Repository;
        $this->G = $Gateway;
    }

    public function getUserRooms()
    {
        return $this->R->getUserRooms();
    }
}

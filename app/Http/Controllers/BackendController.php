<?php

namespace App\Http\Controllers;
use App\DeGustator\Repository\Repository;
use App\DeGustator\Gateway\Gateway;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function __construct(Repository $Repository, Gateway $Gateway)
    {
        /* $this->middleware('auth');*/
        $this->R = $Repository;
        $this->G = $Gateway;
    }


}

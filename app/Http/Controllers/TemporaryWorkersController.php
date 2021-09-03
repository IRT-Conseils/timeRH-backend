<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemporaryWorkersController extends Controller
{
    public function temporaryWorkers()
    {
        return view('rh.temporary-workers');
    }
}

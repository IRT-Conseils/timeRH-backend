<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyRequestsController extends Controller
{
    public function myRequests()
    {
        return view('rh.my-requests');
    }
}

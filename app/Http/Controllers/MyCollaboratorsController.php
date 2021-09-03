<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyCollaboratorsController extends Controller
{
    public function myCollaborators()
    {
        return view('rh.my-collaborators');
    }
}

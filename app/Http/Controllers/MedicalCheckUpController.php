<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalCheckUpController extends Controller
{
    public function medicalCheckUp()
    {
        return view('rh.medical-check-up');
    }
}

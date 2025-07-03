<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MonitoringMandiriController extends Controller
{
    public function index()
    {
        
        return view('pages.penerima_manfaat.monitoring-mandiri');
    }


}

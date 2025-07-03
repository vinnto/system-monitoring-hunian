<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserDashboardController extends Controller
{
    public function index()
    {
        return view('pages.penerima_manfaat.index');
    }

    public function profilePenerimaManfaat()
    {
        return view('pages.penerima_manfaat.profile-pm');
    }

    public function help()
    {
        return view('pages.penerima_manfaat.help');
    }
}

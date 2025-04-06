<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.user.dashboard');
    }

    public function profilePenerimaManfaat()
    {
        return view('pages.user.profile-pm');
    }

    public function help()
    {
        return view('pages.user.help');
    }
}

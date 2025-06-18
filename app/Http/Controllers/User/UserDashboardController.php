<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserDashboardController extends Controller
{
    public function index()
    {
        return view('pages.user.index');
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

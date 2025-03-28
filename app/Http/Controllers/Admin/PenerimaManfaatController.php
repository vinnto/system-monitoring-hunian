<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenerimaManfaatController extends Controller
{
    public function index()
    {
        return view('pages.admin.penerima-manfaat');
    }

    public function profile()
    {
        return view('pages.admin.profile-penerima-manfaat');
    }
}

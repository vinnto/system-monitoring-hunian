<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MonitoringHunianController extends Controller
{
    public function index()
    {
        return view('pages.admin.monitoring-hunian');
    }

    public function detailHunian()
    {
        return view('pages.admin.detail-hunian');
    }

    public function kuesionerHunian()
    {
        return view('pages.admin.kuesioner-hunian');
    }
}

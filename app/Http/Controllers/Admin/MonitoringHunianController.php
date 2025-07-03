<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MonitoringHunianController extends Controller
{
    public function index()
    {
        return view('pages.admin.monitoring-hunian');
    }

    public function create()
    {
        
    }

    public function detailHunian()
    {
        return view('pages.admin.detail-hunian');
    }

    public function kuesionerHunian()
    {
        return view('pages.admin.kuesioner-hunian');
    }

    public function kuesionerMandiri()
    {
        return view('pages.admin.monitoring.mandiri');
    }
}

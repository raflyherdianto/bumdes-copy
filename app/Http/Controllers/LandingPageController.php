<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function catalog()
    {
        return view('pages.catalog');
    }

    public function simpanPinjam()
    {
        return view('pages.simpanPinjam');
    }

    public function dataMasyarakat()
    {
        return view('pages.dataMasyarakat');
    }
}

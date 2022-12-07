<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class intmarkController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function services()
    {
        return view('services');
    }



    public function workUs()
    {
        return view('worksPage');
    }

    public function last()
    {
        return view('last');
    }


    public function form()
    {
        return view('form');
    }
}

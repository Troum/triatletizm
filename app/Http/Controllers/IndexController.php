<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function programs()
    {
        return view('programs');
    }

    public function about()
    {
        return view('about');
    }

    public function triatletizm()
    {
        return view('triatletizm');
    }

    public function feedback()
    {
        return view('feedback');
    }

    public function training()
    {
        return view('training');
    }
    public function contacts()
    {
        return view('contacts');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PageController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function profil()
    {
        return view('user.profil');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function showAbout()
    {
        return view('about');

    // PageController.php
    public function showContact()
    {
        return view('contact');

    }
}

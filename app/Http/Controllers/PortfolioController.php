<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function experience() {
        return view('experience');
    }

    public function skills() {
        return view('skills');
    }

    public function contact() {
        return view('contact');
    }
}

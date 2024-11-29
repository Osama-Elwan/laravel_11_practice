<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index() {

    // }
    function index() {
        return view('welcome');
    }
    function showAboutPage() {
        return view('about');
    }
}

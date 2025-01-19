<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestBookController extends Controller
{
    //
    public function form() {
        return view('form');
    }
    public function welcome() {
        return view('test.welcome');
    }

    public function master() {
        return view('template.separate.content');
    }
}
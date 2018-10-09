<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckBoxTestController extends Controller
{
    public function get(Request $request) {
        return view('checkboxtest');
    }

    public function post(Request $request) {
        $body = $request->all();
        var_dump($body);
    }
}

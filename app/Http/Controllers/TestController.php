<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function sample(Request $request) {
        return view('sample');
    }

    public function post(Request $request) {
        $body = $request->all();
        return [
            'body' => $body,
        ];
    }
}

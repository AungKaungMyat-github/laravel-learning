<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FruitController extends Controller
{
    public function index() {
        $fruits = ['banana', 'orange', 'mango'];
        $flowers = ['rose', 'orchid', 'lee bl'];
        return view('fruits', compact('fruits', 'flowers'));
    }
}

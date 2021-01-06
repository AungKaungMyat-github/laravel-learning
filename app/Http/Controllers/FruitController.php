<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;

class FruitController extends Controller
{
    public function index() {
        $fruits = Fruit::all();
        return view('fruits.index', compact('fruits'));
    }
    public function create() {
        return view('fruits.create');
    }
    public function store(Request $request) {
        $fruit = new Fruit;
        $fruit->name = $request->name;
        $fruit->description = $request->description;
        $fruit->save();
        return redirect('/fruits');
    }
}

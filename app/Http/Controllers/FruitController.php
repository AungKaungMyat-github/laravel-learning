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
        $validated = $request->validate([
            'name' => 'required|unique:fruits|max:255',
            'description' => 'nullable',
        ]);
        Fruit::create($validated);
        return redirect('/fruits');
    }
    public function show($id) {
        $fruit = Fruit::find($id);

        return view('fruits.show', compact('fruit'));
    }
    public function edit($id) {
        $fruit = Fruit::find($id);

        return view('fruits.edit', compact('fruit'));
    }
    public function update(Request $request, $id){
        $fruit = Fruit::find($id);
        $validated = $request->validate([
            'name' => 'required|unique:fruits|max:255',
            'description' => 'nullable',
        ]);
        $fruit->update($validated);
        
        return redirect('/fruits');
    }
    public function destroy($id) {
        $fruit = Fruit::find($id);
        $fruit->delete();

        return redirect('/fruits');
    }
}

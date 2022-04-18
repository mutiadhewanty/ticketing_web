<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class PlaceController extends Controller
{
    public function index(){
        $places = Place::all();
        return view('places.index', compact(['places']));
    }

    public function create(){
        return view('places.create');
    }

    public function store(Request $request){
        Place::create($request->all());
        return redirect('/places');
    }

    public function edit($id){
        $place = Place::find($id);
        return view('places.edit', compact(['place']));
    }

    public function update(Request $request,$id){
        $place = Place::find($id);
        $place->update($request->all());
        return redirect('/places');
    }

    public function destroy($id){
        $place = Place::find($id);
        $place->delete();
        return redirect('/places');
    }
}

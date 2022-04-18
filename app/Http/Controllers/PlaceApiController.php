<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class PlaceApiController extends Controller
{
    public function index(){
        $places = Place::all();
        return response()->json(['message' => 'Succes','data' => $places]);
    }
    public function show($id){
        $place = Place::find($id);
        return response()->json(['message' => 'Succes','data' => $place]);
    }
    public function store(Request $request){
        $place = Place::create($request->all());
        return response()->json(['message' => 'Succes','data' => $place]);
    }
    public function update(Request $request,$id){
        $place = Place::find($id);
        $place->update($request->all());
        return response()->json(['message' => 'Succes','data' => $place]);
    }
    public function destroy($id){
        $place = Place::find($id);
        $place->delete();
        return response()->json(['message' => 'Succes','data' => null]);
    }
}

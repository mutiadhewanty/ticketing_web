<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookPlace;

class BookPlaceApiController extends Controller
{
    public function index(){
        $booking = BookPlace::all();
        return response()->json(['message' => 'Succes','data' => $booking]);
    }
    public function show($id){
        $book = BookPlace::find($id);
        return response()->json(['message' => 'Succes','data' => $book]);
    }
    public function store(Request $request){
        $book = BookPlace::create($request->all());
        return response()->json(['message' => 'Succes','data' => $book]);
    }
    public function update(Request $request,$id){
        $book = BookPlace::find($id);
        $book->update($request->all());
        return response()->json(['message' => 'Succes','data' => $book]);
    }
    public function destroy($id){
        $book = BookPlace::find($id);
        $book->delete();
        return response()->json(['message' => 'Succes','data' => null]);
    }
}

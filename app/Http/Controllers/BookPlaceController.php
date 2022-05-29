<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookPlace;

class BookPlaceController extends Controller
{
    public function index(){
        $booking = BookPlace::all();
        return view('bookPlace.index', compact(['booking']));
    }
    public function create(){
        return view('bookPlace.create');
    }
    public function store(Request $request){
        BookPlace::create($request->all());
        return redirect('/booking');
    }
    public function edit($id){
        $book = BookPlace::find($id);
        return view('bookPlace.edit', compact(['book']));
    }
    public function update(Request $request,$id){
        $book = BookPlace::find($id);
        $book->update($request->all());
        return redirect('/booking');
    }
    public function destroy($id){
        $book = BookPlace::find($id);
        $book->delete();
        return redirect('/booking');
    }
}

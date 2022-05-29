<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailTicketing;

class DetailTicketingController extends Controller
{
    public function index(){
        $ticketing = DetailTicketing::all();
        return view('detailsTicketing.index', compact(['ticketing']));
    }
    public function create(){
        return view('detailsTicketing.create');
    }
    public function store(Request $request){
        DetailTicketing::create($request->all());
        return redirect('/ticketing');
    }
    public function edit($id){
        $ticket = DetailTicketing::find($id);
        return view('detailsTicketing.edit', compact(['ticket']));
    }
    public function update(Request $request,$id){
        $ticket = DetailTicketing::find($id);
        $ticket->update($request->all());
        return redirect('/ticketing');
    }
    public function destroy($id){
        $ticket = DetailTicketing::find($id);
        $ticket->delete();
        return redirect('/ticketing');
    }
}

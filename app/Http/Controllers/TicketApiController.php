<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailTicketing;

class TicketApiController extends Controller
{
    public function index(){
        $ticketing = DetailTicketing::all();
        return response()->json(['message' => 'Succes','data' => $ticketing]);
    }
    public function show($id){
        $ticket = DetailTicketing::find($id);
        return response()->json(['message' => 'Succes','data' => $ticket]);
    }
    public function store(Request $request){
        $ticket = DetailTicketing::create($request->all());
        return response()->json(['message' => 'Succes','data' => $ticket]);
    }
    public function update(Request $request,$id){
        $ticket = DetailTicketing::find($id);
        $ticket->update($request->all());
        return response()->json(['message' => 'Succes','data' => $ticket]);
    }
    public function destroy($id){
        $ticket = DetailTicketing::find($id);
        $ticket->delete();
        return response()->json(['message' => 'Succes','data' => null]);
    }
}

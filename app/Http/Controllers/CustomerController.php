<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $pengunjungUser = Customer::all();
        return view('pengunjung.index', compact(['pengunjungUser']));
    }

    public function edit($id)
    {
        $pengunjungUser = Customer::find($id);
        return view('pengunjung.edit', compact(['pengunjungUser']));
    }

    public function update(Request $request, $id)
    {
        $pengunjungUser = Customer::find($id);
        $pengunjungUser->update($request->all());
        return redirect('/pengunjungUser');
    }

    public function destroy($id)
    {
        $pengunjungUser = Customer::find($id);
        $pengunjungUser->delete();
        return redirect('/pengunjungUser');
    }
}

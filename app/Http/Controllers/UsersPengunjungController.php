<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunjung;

class UsersPengunjungController extends Controller
{
    public function index()
    {
        $pengunjungUser = Pengunjung::all();
        return view('pengunjung.index', compact(['pengunjungUser']));
    }

    public function edit($id)
    {
        $pengunjungUser = Pengunjung::find($id);
        return view('pengunjung.edit', compact(['pengunjungUser']));
    }

    public function update(Request $request, $id)
    {
        $pengunjungUser = Pengunjung::find($id);
        $pengunjungUser->update($request->all());
        return redirect('/pengunjungUser');
    }

    public function destroy($id)
    {
        $pengunjungUser = Pengunjung::find($id);
        $pengunjungUser->delete();
        return redirect('/pengunjungUser');
    }
}

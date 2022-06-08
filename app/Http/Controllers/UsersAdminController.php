<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class UsersAdminController extends Controller
{
    public function index()
    {
        $adminUser = Admin::all();
        return view('admin.index', compact(['adminUser']));
    }

    public function edit($id)
    {
        $adminUser = Admin::find($id);
        return view('admin.edit', compact(['adminUser']));
    }

    public function update(Request $request, $id)
    {
        $adminUser = Admin::find($id);
        $adminUser->update($request->all());
        return redirect('/adminUser');
    }

    public function destroy($id)
    {
        $adminUser = Admin::find($id);
        $adminUser->delete();
        return redirect('/adminUser');
    }
}

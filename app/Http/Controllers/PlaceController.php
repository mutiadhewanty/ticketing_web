<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::all();
        return view('places.index', compact('places'));
    }

    public function create()
    {
        return view('places.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'name'     => 'required',
            'description'   => 'required',
            'price'   => 'required'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/place', $image->hashName());

        $places = Place::create([
            'image'     => $image->hashName(),
            'name'     => $request->name,
            'description'   => $request->description,
            'price'   => $request->price,
        ]);

        if ($places) {
            //redirect dengan pesan sukses
            return redirect()->route('places.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('places.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Place $places)
    {
        return view('places.edit', compact('places'));
    }

    public function update(Request $request, Place $places)
    {
        $this->validate($request, [
            'name'     => 'required',
            'description'   => 'required',
            'price'   => 'required'
        ]);

        //get data plc$places by ID
        $places = Place::findOrFail($places->id);

        if ($request->file('image') == "") {

            $places->update([
                'name'     => $request->name,
                'description'   => $request->description,
                'price'   => $request->price
            ]);
        } else {

            //hapus old image
            Storage::disk('local')->delete('public/place/' . $places->image);

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/place', $image->hashName());

            $places->update([
                'image'     => $image->hashName(),
                'name'     => $request->name,
                'description'   => $request->description,
                'price'   => $request->price
            ]);
        }

        if ($places) {
            //redirect dengan pesan sukses
            return redirect()->route('places.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('places.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }


    public function destroy($id)
    {
        $places = Place::findOrFail($id);
        Storage::disk('local')->delete('public/place/' . $places->image);
        $places->delete();

        if ($places) {
            //redirect dengan pesan sukses
            return redirect()->route('places.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('places.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}

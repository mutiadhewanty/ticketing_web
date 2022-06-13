<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use Illuminate\Support\Facades\Storage;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Place::all();
        return view('places.index', compact(['places']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('places.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'name'     => 'required',
            'description'   => 'required',
            'price'   => 'required'
        ]);

        //upload image
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('place', 'public');
        }

        $places = Place::create([
            'image'     => $image_name,
            'name'     => $request->name,
            'description'   => $request->description,
            'price'     => $request->price
        ]);

        if ($places) {
            //redirect dengan pesan sukses
            return redirect()->route('places.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('places.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $show = Pengeluaran::find($id);

    //     return view('pengeluaran.detail', compact('show'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        return view('places.edit', compact('place'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $places)
    {
        $this->validate($request, [
            'name'     => 'required',
            'description'   => 'required',
            'price' => 'required'
        ]);

        //get data place by ID
        $places = Place::findOrFail($places->id);

        if ($request->file('image') == "") {

            $places->update([
                'name'     => $request->name,
                'description'   => $request->description,
                'price' => $request->price
            ]);
        } else {

            if ($places->image && file_exists(storage_path('app/public/' . $places->image))) {
                Storage::delete(['public/', $places->image]);
            };

            $image_name = $request->file('image')->store('place', 'public');

            $places->update([
                'image'     => $image_name,
                'name'     => $request->name,
                'description'   => $request->description,
                'price' => $request->price
            ]);
        }

        if ($places) {
            //redirect dengan pesan sukses
            return redirect()->route('places.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('places.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $places = Place::findOrFail($id);
        Storage::delete(['public/', $places->image]);
        $places->delete();

        if ($places) {
            //redirect dengan pesan sukses
            return redirect()->route('places.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('blplaceog.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}

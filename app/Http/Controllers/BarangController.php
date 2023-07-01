<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = barang::all();
        return view('dashboard.manajemen-barang.barang', ['barang' => $barang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = barang::all();
        return view('dashboard.manajemen-barang.create-barang', ['barang' => $barang]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namabarang' => 'required|min:10',
            'deskripsi' => 'required',
            'harga' => 'required',
            'image' => 'required|mimes:jpg,png,svg,jpeg|max:2048',
            
        ]);

        $imageName = time().'.'.$request->image->extension();  

        $request->image->move(public_path('uploads'), $imageName);

        $barang = new Barang;
        
        $barang->namabarang = $request->input('namabarang');
        $barang->deskripsi = $request->input('deskripsi');
        $barang->harga = $request->input('harga');
        $barang->image = $imageName;
        

        $barang->save();

        return redirect('/dashboard/barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::find($id);
        return view('dashboard.manajemen-barang.detail-barang', ['barang' => $barang]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('dashboard.manajemen-barang.edit-barang', ['barang' => $barang]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'namabarang' => 'required|min:10',
            'deskripsi' => 'required',
            'harga' => 'required',
            'image' => 'required|mimes:jpg,png,svg,jpeg|max:2048',
            
        ]);

        $barang = Barang::find($id);
 
        $barang->namabarang = $request->input('namabarang');
        $barang->deskripsi = $request->input('deskripsi');
        $barang->harga = $request->input('harga');

        if($request->has('image')) {
            $path = 'uploads/';
            File::delete($path . $barang->image);

            $newimageName = time().'.'.$request->image->extension();  

            $request->image->move(public_path('uploads'), $newimageName);

            $barang->image = $newimageName;
        };

        $barang->save();

        return redirect('/dashboard/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
 
        $path = 'uploads/';
        File::delete($path . $barang->image);
        
        $barang->delete();
        return redirect('/dashboard/barang');
    }
}

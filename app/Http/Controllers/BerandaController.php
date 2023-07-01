<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BerandaController extends Controller
{
    public function index()
    {
        // $barang = barang::all();
        // return view('layouts.main', ['barang' => $barang]);

        return view('pages.beranda', [
            'barang' => Barang::all()
        ]);
    }
}

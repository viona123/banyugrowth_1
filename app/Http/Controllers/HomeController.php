<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $produkList = [
            ['id'=>1, 'nama'=>'Hanna Bakery', 'umkm'=>'Hanna Bakery', 'harga'=>50000],
            ['id'=>2, 'nama'=>'Rasa Banyumas', 'umkm'=>'Rasa Banyumas', 'harga'=>20000],
            ['id'=>3, 'nama'=>'CraftHouse', 'umkm'=>'CraftHouse', 'harga'=>85000],
            ['id'=>4, 'nama'=>'HerbaFresh', 'umkm'=>'HerbaFresh', 'harga'=>25000],
        ];
        return view('umkm.home', compact('produkList'));
    }

    public function search(Request $request)
    {
        $keyword = strtolower($request->input('q'));

        $produkList = [
            ['id'=>1, 'nama'=>'Hanna Bakery', 'umkm'=>'Hanna Bakery', 'harga'=>50000],
            ['id'=>2, 'nama'=>'Rasa Banyumas', 'umkm'=>'Rasa Banyumas', 'harga'=>20000],
            ['id'=>3, 'nama'=>'CraftHouse', 'umkm'=>'CraftHouse', 'harga'=>85000],
            ['id'=>4, 'nama'=>'HerbaFresh', 'umkm'=>'HerbaFresh', 'harga'=>25000],
        ];

        $hasil = array_filter($produkList, function ($produk) use ($keyword) {
            return str_contains(strtolower($produk['nama']), $keyword) ||
                   str_contains(strtolower($produk['umkm']), $keyword);
        });

        return view('umkm.home', [
            'produkList' => $hasil,
            'searchQuery' => $request->q
        ]);
    }
}


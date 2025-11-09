<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmkmProductController extends Controller
{
    public function show($id)
    {
        $produkList = [
            1 => [
                'nama' => 'Hanna Bakery',
                'umkm' => 'Hanna Bakery',
                'image' => '/assets/img/produk_umkm_1.jpg',
                'harga' => '50.000',
                'deskripsi' => 'Perpaduan rasa dari roti yang empuk dan padat dengan tambahan toping keju yang sangat cocok untuk dinikmati setiap hari dan kue nastar yang lezat empuk dan sangat lembut ketika dimulut, cocok untuk semua usia.',
                'lokasi' => 'Purwokerto, Banyumas',
                'rating' => '4.9'
            ],
            2 => [
                'nama' => 'Rasa Banyumas',
                'umkm' => 'Rasa Banyumas',
                'image' => '/assets/img/produk_umkm_2.jpg',
                'harga' => '20.000',
                'deskripsi' => 'Rempeyek teri pedas khas Banyumas dengan rasa gurih pedas yang enak dinikmati oleh semua kalangan usia.',
                'lokasi' => 'Sokaraja, Banyumas',
                'rating' => '4.8'
            ],
            3 => [
                'nama' => 'CraftHouse',
                'umkm' => 'CraftHouse',
                'image' => '/assets/img/produk_umkm_3.jpg',
                'harga' => '85.000',
                'deskripsi' => 'Dark coklat batangan buatan lokal dengan bahan premium.',
                'lokasi' => 'Baturraden, Banyumas',
                'rating' => '4.7'
            ],
            4 => [
                'nama' => 'HerbaFresh',
                'umkm' => 'HerbaFresh',
                'image' => '/assets/img/produk_umkm_4.jpg',
                'harga' => '25.000',
                'deskripsi' => 'Kripik pisang coklat lezat dari bahan alami.',
                'lokasi' => 'Purwanegara, Banyumas',
                'rating' => '4.6'
            ],
        ];

        $produk = $produkList[$id] ?? abort(404);

        return view('umkm.detail', compact('produk'));
    }
}

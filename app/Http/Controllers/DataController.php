<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DataController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel datas dengan pagination 5 data per halaman8
        $data = Data::orderBy('jumlah_kasus', 'desc')->paginate(10);//perbaiki
        $total_kasus = Data::sum('jumlah_kasus');
    
        // Hitung Persentase
        $data->transform(function ($item) use ($total_kasus) {
            $item->persentase = $total_kasus > 0 ? ($item->jumlah_kasus / $total_kasus) * 100 : 0;
            return $item;
        });

        // Mengirim data ke view
        return view('welcome', compact('data'));
    }

    public function show($id)
    {
        // Mengambil semua data dari tabel data_stunting
        $data = Data::findOrFail($id);

        return view('detail', compact('data'));
    }
}

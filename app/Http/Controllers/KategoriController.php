<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\KategoriDataTable;

class KategoriController extends Controller
{
    //index
    public function index(KategoriDataTable $dataTable)
    {
        // DB::insert('insert into m_kategori(kategori_nama, kategori_kode, created_at) values(?, ?, ?)', ['permen', '89', now()]);
        // return 'Data berhasil ditambah';

        //update
        // $row = DB::table('m_kategori')->where('kategori_kode', '89')->update(['kategori_nama' => 'Permen']);
        // return 'Data berhasil diupdate. jumlah data yang diupdate: ' . $row;

        //delete
        // $row = DB::table('m_kategori')->where('kategori_kode', '89')->delete();
        // return 'Data berhasil dihapus. jumlah data yang dihapus: ' . $row;

        //select view
        // $data = DB::table('m_kategori')->get();
        // return view('kategori', ['data' => $data]);

        // return $dataTable->render('kategori.index');

        return $dataTable->render('kategori.index');

    }
    //create
    public function create()
    {
        return view('kategori.create');
    }

    //store
    public function store(Request $request)
    {
       KategoriModel::create(
              [
                'kategori_kode' => $request->kodeKategori,
                'kategori_nama' => $request->namaKategori,
              ]
       );

         return redirect('/kategori');
    }
}

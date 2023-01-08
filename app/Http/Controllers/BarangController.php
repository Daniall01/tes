<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use PDF;

class BarangController extends Controller
{
    public function index()
    {
        //Ambil Post
        $barangs = Barang::all();

        //Mengembalikan User View ke Folder posts dengan nama file index & Mengirimkan data dari (folder post)
        return view('barang.form_barang', compact('barangs'));
    }

    public function tambah()
    {
        //  Menampilkan file tambah.blade.php       
        return view('barang.tambah_barang');
    }

    public function simpan(Request $req){
        Barang::create(
            [
                "name"=>$req->name,
            ]
        );
        return redirect('form_barang');
    }

    public function cetakpdf(){
        $barangs = Barang::all();

        $pdf = PDF::loadview('barang.cetak_barang',['barangs'=>$barangs])->setOptions(['defaultFont' => 'sans-serif']);
	    // return $pdf->download('laporan-user-pdf.pdf');
	    return $pdf->stream();
    }

    // Proses Edit
    public function edit($id){
        $barangs = Barang::where("id","=",$id)->first();
        return view('barang.edit_barang', compact('barangs'));
    }

    public function update(Request $req, $id){
        $barangs = Barang::where("id","=",$id)->first();
        $barangs->id = $id;
        $barangs->name = $req->name;
        $barangs->save();

        return redirect('form_barang');

    }

    public function hapus($id){
        Barang::where("id","=",$id)->first()->delete();

        return redirect('form_barang');
    }
}

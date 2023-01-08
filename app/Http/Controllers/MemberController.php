<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        //Ambil Post
        $members = Member::all();

        //Mengembalikan User View ke Folder posts dengan nama file index & Mengirimkan data dari (folder post)
        return view('member.form_member', compact('members'));
    }

    public function tambah()
    {
        //  Menampilkan file tambah.blade.php       
        return view('member.tambah_member');
    }

    public function simpan(Request $req){
        Member::create(
            [
                "name"=>$req->name,
            ]
        );
        return redirect('form_member');
    }

    // Proses Edit
    public function edit($id){
        $members = Member::where("id","=",$id)->first();
        return view('member.edit_member', compact('members'));
    }

    public function update(Request $req, $id){
        $members = Member::where("id","=",$id)->first();
        $members->id = $id;
        $members->name = $req->name;
        $members->save();

        return redirect('form_member');

    }

    public function hapus($id){
        Member::where("id","=",$id)->first()->delete();

        return redirect('form_member');
    }
}

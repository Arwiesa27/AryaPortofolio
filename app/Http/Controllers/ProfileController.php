<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    //
    function show(){
        $data['profile'] = Profile::all();
        return view('portofolio', $data);
    }
    // function add(){
    //     $data=[
    //         'action'=> url('profile/create'),
    //         'tombol'=> 'Simpan',
    //         'profile'=> (object)[
    //             'id'=> '',
    //             'nama'=> '',
    //             'username'=> '',
    //             'about' => '',
    //             'nohp' => '',
    //             'alamat' => '',
    //             'foto' => '',
    //         ]
    //         ];
    //     return view('formProfile',$data);
    // }
    // function create(Request $req){
    //     // $this->validate($req , [
    //     //     'id' => 'required|min:2|numeric',
    //     //     'nama' => 'required|string|max:15',
    //     //     'username' => 'required|min:5',
    //     //     'about' => 'required|string|100',
    //     //     'nohp' => 'required|min:12',
    //     //     'alamat' => 'required|max:50',
    //     //     'foto' => 'mimes:jpg,png'
    //     // ]);
    //     Profile::create ([
    //         'id' =>$req->id,
    //         'nama' => $req->nama,
    //         'username' =>$req->username,
    //         'about' =>$req->about,
    //         'nohp' =>$req->nohp,
    //         'alamat' =>$req->alamat,
    //         'foto' => $req->file('foto')->store('foto')
    //     ]);
    //     return redirect('profile');
    // }
    function edit(){
        $data['profile']= Profile::first();
        $data['action']= url('profile/update').'/'.$data['profile']->id;
        $data['tombol']= 'Update';
        return view('formProfile',$data);
    }
    function update(Request $req){
        if($req->file('foto')){
            $profile = Profile::where('id',$req->id)->first();
            Storage::delete($profile->foto);
            $file = $req->file('foto')->store('foto');
        }else{
            $file = DB::raw('foto');
        }
        Profile::where('id',$req->id)->update([
            'id'=>$req->id,
            'nama'=>$req->nama,
            'username'=>$req->username,
            'about'=>$req->about,
            'nohp'=>$req->nohp,
            'alamat'=>$req->alamat,
            'foto' =>$file
        ]);
        return redirect('profile');
    }
}

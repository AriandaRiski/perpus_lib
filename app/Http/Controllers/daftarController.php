<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftar;
use App\Models\Province;
use App\Models\Regency;

use DB;

class daftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $daftar = DB::table('daftar as a')
                ->select('a.*','b.id as id_prov','b.name as namaprov','c.id as id_kab','c.name as namakab')
                ->leftJoin('provinces as b','a.provinsi','=','b.id')
                ->leftJoin('regencies as c','a.kabupaten','=','c.id')
                ->orderBy('a.created_at','DESC')
                ->get();

        return view('.daftar/anggota',compact('daftar'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $c_daftar = new daftar;
        return view('.daftar/pendaftaran',compact('c_daftar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c_daftar = new daftar;
        $c_daftar->identitas = $request->identitas;
        $c_daftar->no_identitas = $request->no_identitas;
        $c_daftar->password = $request->password;
        $c_daftar->nama = $request->nama;
        $c_daftar->tempat_lahir = $request->tempat_lahir;
        $c_daftar->tgl_lahir = $request->tgl_lahir;
        $c_daftar->alamat_identitas = $request->alamat_identitas;
        $c_daftar->alamat_sekarang = $request->alamat_sekarang;
        $c_daftar->hp = $request->hp;
        $c_daftar->tlp = $request->tlp;
        $c_daftar->pendidikan = $request->pendidikan;
        $c_daftar->pekerjaan = $request->pekerjaan;
        $c_daftar->status = $request->status;
        $c_daftar->jenis_kelamin = $request->jenis_kelamin;
        $c_daftar->institusi = $request->institusi;
        $c_daftar->alamat_ins = $request->alamat_ins;
        $c_daftar->tlp_ins = $request->tlp_ins;
        $c_daftar->email = $request->email;
        $c_daftar->provinsi = $request->provinsi;
        $c_daftar->kabupaten = $request->kabupaten;
        $c_daftar->save();
        return redirect('/home/create')->with('success', 'Anda Berhasil Mendaftar!<br> Silahkan Menunggu 1x24 jam untuk Konfirmasi Admin');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $daftar = Daftar::find($id);
        
        $daftar = DB::table('daftar as a')
        ->select('a.*','b.id as id_prov','b.name as namaprov','c.id as id_kab','c.name as namakab')
        ->leftJoin('provinces as b','a.provinsi','=','b.id')
        ->leftJoin('regencies as c','a.kabupaten','=','c.id')
        ->where('a.id',$id)
        ->first();
        return view('daftar/detail_anggota',compact('daftar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $c_daftar = daftar::find($id);
        $provinces = Province::all();
        return view('.daftar/edit_anggota',compact('c_daftar','provinces'));
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
        $c_daftar = daftar::find($id);
        $c_daftar->identitas = $request->identitas;
        $c_daftar->no_identitas = $request->no_identitas;
        $c_daftar->password = $request->password;
        $c_daftar->nama = $request->nama;
        $c_daftar->tempat_lahir = $request->tempat_lahir;
        $c_daftar->tgl_lahir = $request->tgl_lahir;
        $c_daftar->alamat_identitas = $request->alamat_identitas;
        $c_daftar->alamat_sekarang = $request->alamat_sekarang;
        $c_daftar->hp = $request->hp;
        $c_daftar->tlp = $request->tlp;
        $c_daftar->pendidikan = $request->pendidikan;
        $c_daftar->pekerjaan = $request->pekerjaan;
        $c_daftar->status = $request->status;
        $c_daftar->jenis_kelamin = $request->jenis_kelamin;
        $c_daftar->institusi = $request->institusi;
        $c_daftar->alamat_ins = $request->alamat_ins;
        $c_daftar->tlp_ins = $request->tlp_ins;
        $c_daftar->email = $request->email;
        $c_daftar->provinsi = $request->provinsi;
        $c_daftar->kabupaten = $request->kabupaten;
        $c_daftar->save();
        return redirect('/home')->withSuccess('Data Berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c_daftar = daftar::find($id);
        $c_daftar->delete();
        return redirect('/home')->with('success', 'Data Berhasil Dihapus');
    }
    // public function provinces(){
    //     return \Indonesia::allProvinces();
    // }

    // public function cities(Request $request){
    //     return \Indonesia::findProvince($request->id, ['cities'])->cities->pluck('name','id');
    // }

    // public function districts(Request $request){
    //     return \Indonesia::findCity($request->id, ['districts'])->districts->pluck('name','id');
    // }

    // public function villages(Request $request){
    //     return \Indonesia::findDistrict($request->id, ['villages'])->villages->pluck('name','id');
    // }

    public function indexP()
    {  
        $provinces = Province::all();
        return view('.daftar/pendaftaran',compact('provinces'));
    }

    public function kabupaten(Request $request)
    {
        $id_provinsi = $request->id_provinsi;
        $kabupatens = Regency::where('province_id', $id_provinsi)->get();

        foreach($kabupatens as $kab){
            echo"<option value='$kab->id'>$kab->name</option>";
        }
    }  
}

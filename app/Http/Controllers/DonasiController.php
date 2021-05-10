<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonasiModel;
use DB;

class DonasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->DonasiModel = new DonasiModel;
    }

    public function donasi() {
        return view('donasi');
    }

    public function tambahdonasi() {
        Request()->validate([
            'id_donatur' => 'nullable',
            'nama_donatur' => 'required',
            'email' => 'required',
            'no_telepon' => 'required|regex:/^\d+(\.\d{1,2})?$/|min:12|max:13',
            'jumlah_donasi' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'dibuat_tanggal' => 'nullable',
            'status' => 'required',

        ]);
        
        $data = [
            'id_donatur' => Request()->id_donatur,
            'nama_donatur' => Request()->nama_donatur,
            'email' => Request()->email,
            'no_telepon' => Request()->no_telepon,
            'jumlah_donasi' => Request()->jumlah_donasi,
            'dibuat_tanggal' => Request()->dibuat_tanggal,
            'status' => Request()->status,
        ];

        $this->DonasiModel->addData($data);
        return redirect()->route('donasis')->with('pesan','Data sukes disimpan, jangan lupa kirim bukti pembayaran untuk verifikasi.');
    }

    public function donatur() {

        $tampil = DB::table('donatur')->orderByDesc('dibuat_tanggal')->get();
        return view('admin/donatur', compact('tampil'));
    }    

    public function ubah($id_donatur) {
        if (!$this->DonasiModel->detailData($id_donatur)) {
            abort(404);
        }
        $data = [
            'id_donatur' => $this->DonasiModel->detailData($id_donatur),
        ];
        return view('admin/editdonatur', $data);
    }

    public function update($id_donatur) {
        Request()->validate([
            'id_donatur' => 'nullable',
            'nama_donatur' => 'required',
            'email' => 'required',
            'no_telepon' => 'required|regex:/^\d+(\.\d{1,2})?$/|min:12|max:13',
            'jumlah_donasi' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'dibuat_tanggal' => 'nullable',
            'status' => 'required',

        ]);
        
        $data = [
            'id_donatur' => Request()->id_donatur,
            'nama_donatur' => Request()->nama_donatur,
            'email' => Request()->email,
            'no_telepon' => Request()->no_telepon,
            'jumlah_donasi' => Request()->jumlah_donasi,
            'dibuat_tanggal' => Request()->dibuat_tanggal,
            'status' => Request()->status,
        ];

        $this->DonasiModel->editData($id_donatur, $data);
        return redirect()->route('donaturs')->with('pesan','Data berhasil di ubah.');
    
    }

    public function hapus($id_donatur) {
        $data = [
            'id_donatur' => Request()->id_donatur,
            'nama_donatur' => Request()->nama_donatur,
            'email' => Request()->email,
            'no_telepon' => Request()->no_telepon,
            'jumlah_donasi' => Request()->jumlah_donasi,
            'dibuat_tanggal' => Request()->dibuat_tanggal,
            'status' => Request()->status,
        ];

        $this->DonasiModel->deleteData($id_donatur, $data);
        return redirect()->route('donaturs')->with('pesan', 'Data berhasil di hapus.');
    }

    public function detail_profil() {
        return view('detailprofil');
    }

    public function edit_profil() {
        return view('editprofil');
    }

    public function update_profil() {
        Request()->validate([
            'ids' => 'nullable',
            'nama' => 'required',
            'email' => 'required',
        ]);
        
        $data = [
            'id' => Request()->ids,
            'name' => Request()->nama,
            'email' => Request()->email,
        ];
        $id = auth()->user()->id;
        DB::table('users')->where ('id', $id)->update($data);
        return redirect()->route('detailprofil');
    }
    
}

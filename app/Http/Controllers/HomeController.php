<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonasiModel;
use DB;
use Illuminate\Pagination\Paginator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->DonasiModel = new DonasiModel;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $jumlah_donasi = DB::table('donatur')->where('status','=','Terverifikasi')->sum('jumlah_donasi');
        $jumlah_donatur = DB::table('donatur')->where('status','=','Terverifikasi')->get()->count();
        $tampil = DB::table('donatur')->orderByDesc('dibuat_tanggal')->limit(10)->get();
        return view('home',compact('tampil','jumlah_donatur','jumlah_donasi'));
    }
}

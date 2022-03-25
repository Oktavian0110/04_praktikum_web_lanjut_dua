<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//panggil model pegawai
use App\models\Pegawaai;

class PegawaaiController extends Controller
{
    public function index()
    {
    	// mengambil data pegawai
    	$pegawaai = Pegawaai::all();
 
    	// mengirim data pegawai ke view pegawai
    	return view('pegawaai', ['pegawaai' => $pegawaai]);
    }
}

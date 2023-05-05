<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NasabahController extends Controller
{
    public function view()
    {
        $d['title'] = "Nasabah"; 
        $d['nasabah'] = DB::table('nasabah')->get();
        return view('nasabah.view', $d);
    }
    public function addNasabah(Request $request)
    {
        $data = [
            'Name' => $request->name,
        ];
        DB::table('nasabah')->insert($data);
      
        return redirect()->route('nasabah');
    }
}

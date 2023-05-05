<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function view()
    {
        $d['title'] = "Transaksi";
        $d['transaksi'] = DB::table('transaksi')->get();
        $d['nasabah'] = DB::table('nasabah')->get();
        return view('transaksi.view', $d);
    }
    public function addtransaksi(Request $request)
    {
        $data = [
            'AccountId' => $request->AccountId,
            'TransactionDate' => now(),
            'Description' => $request->Description,
            'DebitCreditStatus' => $request->DebitCreditStatus,
            'Amount' => $request->Amount,
        ];
        // dd($data);
        DB::table('transaksi')->insert($data);

        return redirect()->route('transaksi');
    }
}

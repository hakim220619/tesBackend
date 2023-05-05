<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function view()
    {
        $d['title'] = "Report";
        $d['transaksi'] = DB::table('transaksi')->get();
        $d['nasabah'] = DB::table('nasabah')->get();
        return view('report.view', $d);
    }
    public function SearchReport(Request $request)
    {
        $AccountId = $request->AccountId ? "and AccountId = '$request->AccountId'" : "";
        $StartDate = $request->StartDate ? "and TransactionDate like '%$request->StartDate%'" : "";
        $EndDate = $request->EndDate ? "and TransactionDate like '%$request->EndDate%'" : "";
        $d['title'] = "Report";
        $d['transaksi'] = DB::select("select * from transaksi where 1=1 $AccountId $StartDate $EndDate");
        $d['nasabah'] = DB::table('nasabah')->get();
        return view('report.view', $d);
    }
}

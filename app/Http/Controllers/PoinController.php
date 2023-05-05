<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoinController extends Controller
{
    public function view()
    {
        $d['title'] = "Poin";
        $d['poin'] = DB::select("SELECT n.AccountId, n.Name,
(SUM(CASE 
	WHEN Description = 'Beli Pulsa' AND Amount < 10000 THEN 0
    WHEN Description = 'Beli Pulsa' AND Amount BETWEEN 10001 AND 30000 THEN 1 * SUBSTR(Amount, 1, 2)
    WHEN Description = 'Beli Pulsa' AND Amount > 30000  THEN 2 * SUBSTR(Amount, 1, 2) ELSE 0
END)) as Point_pulsa,
(SUM(CASE 
	WHEN Description = 'Bayar Listrik' AND Amount < 50000 THEN 0
    WHEN Description = 'Bayar Listrik' AND Amount BETWEEN 50001 AND 100000 THEN (1 * SUBSTR(Amount, 1, 2)) / 2
    WHEN Description = 'Bayar Listrik' AND Amount > 100000  THEN (2 * SUBSTR(Amount, 1, 2)) / 2 ELSE 0
END)) as Point_listrik
FROM transaksi t LEFT JOIN nasabah n ON n.AccountId=t.AccountId GROUP BY n.AccountId, n.Name");
        return view('poin.view', $d);
    }
}

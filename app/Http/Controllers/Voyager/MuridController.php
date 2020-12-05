<?php

namespace App\Http\Controllers\Voyager;

use App\Models\Murid;
use App\Models\Nilai;
use App\Exports\NilaiReport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade as PDF;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MuridController extends Controller
{
    public function index()
    {
        $murid = Murid::all();
        $nilai = Nilai::with('muridnya')->get();
        return view('murid.Home', compact('murid','nilai'));
    }

    public function export()
    {
        return Excel::download(new NilaiReport, 'NIlai.xlsx');
    }

    public function export_pdf()
    {
    	$nilai = Nilai::all();
    	$pdf = PDF::loadview('exports/nilai_pdf',['nilai'=>$nilai]);
    	return $pdf->download('laporan-nilai.pdf');
    }
}


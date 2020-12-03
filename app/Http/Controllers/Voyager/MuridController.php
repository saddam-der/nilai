<?php

namespace App\Http\Controllers\Voyager;

use App\Models\Murid;
use App\Models\Nilai;
use Yajra\DataTables\Facades\DataTables;
use App\Exports\NilaiReport;
use Maatwebsite\Excel\Facades\Excel;

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
}


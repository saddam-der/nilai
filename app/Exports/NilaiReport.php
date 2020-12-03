<?php

namespace App\Exports;

use App\Models\Nilai;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class NilaiReport implements FromView
{
    public function view(): View
    {
        return view('exports.nilaimurid', [
            'nilai' => Nilai::all()
        ]);
    }
}

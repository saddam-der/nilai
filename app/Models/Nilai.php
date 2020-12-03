<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = "nilais";

    protected $primaryKey = 'id';

    protected $fillable = [
    	'tugas',
    	'uts',
        'uas',
        'id_murid',
        'id_mapel',
    ];

    public function muridnya()
    {
        return $this->belongsTo('App\Models\murid', 'id_murid')->orderBy('nama');
    }

    public function mapelnya()
    {
        return $this->belongsTo('App\Models\Mapel', 'id_mapel');
    }

}

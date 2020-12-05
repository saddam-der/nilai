<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;
    protected $table = "murids";

    protected $primaryKey = 'id';

    protected $fillable = [
    	'nama',
    	'kelas',
    ];

    public function nilainya()
    {
        // return $this->hasMany('App\Models\Nilai')->orderBy('nama');
        // return $this->belongsToMany('App\Models\nilai', 'murid_nilai');
    }


}

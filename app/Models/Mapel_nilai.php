<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel_nilai extends Model
{
    use HasFactory;
    protected $table = "mapel_nilais";
    protected $fillable = [
    	'mapel_id',
    	'nilai_id',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid_nilai extends Model
{
    use HasFactory;
    protected $table = "murid_nilais";
    protected $fillable = [
    	'murid_id',
    	'nilai_id',
    ];
}

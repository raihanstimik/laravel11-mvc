<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;
    protected $table = "diagnosas";
    protected $fillable = [
            "no_rekam_pasien",
            "nama_pasien",
            "tanggal_pemeriksaan",
            "diagnosa",
    ];
}
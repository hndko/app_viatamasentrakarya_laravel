<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerusahaanModel extends Model
{
    use HasFactory;
    protected $table = 'tb_perusahaan';

    protected $primaryKey = 'perusahaan_id';

    protected $fillable = [
        'nama_perusahaan',
        'npwp_perusahaan',
        'nama_pic',
        'jabatan',
        'no_pic',
    ];
}

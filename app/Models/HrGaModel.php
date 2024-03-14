<?php

namespace App\Models;

use App\Models\PerusahaanModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HrGaModel extends Model
{
    use HasFactory;

    protected $table = 'tb_hrga';
    protected $primaryKey = 'hrga_id';
    protected $fillable = [
        'nama_anggota',
        'tanggal_masuk',
        'no_telpon',
        'jabatan',
        'no_pegawai',
        'nik',
        'tanggal_lahir',
        'perusahaan_id',
        'lokasi',
        'bpjs_kesehatan',
        'bpjs_tk',
        'pkwt_awal',
        'pkwt_akhir',
        'kasbon',
        'slip_gaji',
        'is_archive'
    ];

    protected $casts = [
        'is_archive' => 'boolean',
    ];

    public function perusahaan()
    {
        return $this->belongsTo(PerusahaanModel::class, 'perusahaan_id', 'perusahaan_id');
    }
}

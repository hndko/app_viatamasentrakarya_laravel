<?php

namespace App\Models;

use App\Models\LayananModel;
use App\Models\PerusahaanModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormVOModel extends Model
{
    use HasFactory;
    protected $table = 'tb_form_vo';

    protected $primaryKey = 'form_vo_id';

    protected $fillable = [
        'perusahaan_id',
        'no_invoice',
        'layanan_id',
        'harga',
        'ppn',
        'pph_23',
        'awal_sewa',
        'akhir_sewa',
        'tgl_pembayaran',
        'metode_pembayaran',
        'bukti_pembayaran',
        'bupot',
        'note',
    ];

    protected $casts = [
        'awal_sewa' => 'date',
        'akhir_sewa' => 'date',
        'tgl_pembayaran' => 'date',
    ];

    public function perusahaan()
    {
        return $this->belongsTo(PerusahaanModel::class, 'perusahaan_id', 'perusahaan_id');
    }

    public function layanan()
    {
        return $this->belongsTo(LayananModel::class, 'layanan_id', 'layanan_id');
    }
}

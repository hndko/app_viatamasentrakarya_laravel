<?php

namespace App\Models;

use App\Models\PerusahaanModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormSOModel extends Model
{
    use HasFactory;

    protected $table = 'tb_form_so';
    protected $primaryKey = 'form_so_id';
    protected $fillable = [
        'perusahaan_id',
        'no_invoice',
        'harga',
        'ppn',
        'pph_final',
        'awal_sewa',
        'akhir_sewa',
        'tanggal_pembayaran',
        'bukti_pembayaran',
        'keterangan'
    ];

    public function perusahaan()
    {
        return $this->belongsTo(PerusahaanModel::class, 'perusahaan_id', 'perusahaan_id');
    }
}

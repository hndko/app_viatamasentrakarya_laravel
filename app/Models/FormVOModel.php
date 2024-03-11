<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormVOModel extends Model
{
    use HasFactory;
    protected $table = 'tb_form_vo';

    protected $primaryKey = 'form_vo_id';

    protected $fillable = [
        'perusahaan_id',
        'no_invoice',
        'layanan_id',
        'tahun',
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
        'user_id',
    ];

    protected $casts = [
        'awal_sewa' => 'date',
        'akhir_sewa' => 'date',
        'tgl_pembayaran' => 'date',
    ];
}

<?php

namespace App\Models;

use App\Models\PerusahaanModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PendirianPerusahaanModel extends Model
{
    use HasFactory;
    protected $table = 'tb_pendirian_perusahaan';

    protected $primaryKey = 'pendirian_perusahaan_id';

    protected $fillable = [
        'perusahaan_id',
        'no_invoice',
        'harga',
        'estiminasi_pekerjaan',
        'tanggal_pembayaran',
        'bukti_pembayaran',
        'keterangan',
    ];

    public function perusahaan()
    {
        return $this->belongsTo(PerusahaanModel::class, 'perusahaan_id');
    }
}

<?php

namespace App\Models;

use App\Models\PerusahaanModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VendorModel extends Model
{
    use HasFactory;

    protected $table = 'tb_vendor';
    protected $primaryKey = 'vendor_id';
    protected $fillable = [
        'perusahaan_id',
        'no_invoice',
        'harga',
        'ppn',
        'pph_21',
        'bukti_potong'
    ];

    // Define the relationship with Perusahaan model
    public function perusahaan()
    {
        return $this->belongsTo(PerusahaanModel::class, 'perusahaan_id', 'perusahaan_id');
    }
}

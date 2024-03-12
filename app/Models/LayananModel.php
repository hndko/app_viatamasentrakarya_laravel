<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananModel extends Model
{
    use HasFactory;
    protected $table = 'tb_layanan';
    protected $primaryKey = 'layanan_id';

    protected $fillable = [
        'tipe',
        'judul',
        'harga',
        'is_harga',
        'is_whatsapp',
        'is_color',
        'is_active',
    ];

    protected $casts = [
        'is_harga' => 'boolean',
        'is_whatsapp' => 'boolean',
        'is_active' => 'boolean',
    ];

    // Define the relationship to DeskripsiLayananModel
    public function deskripsi_layanan()
    {
        return $this->hasMany(DeskripsiLayananModel::class, 'layanan_id');
    }
}

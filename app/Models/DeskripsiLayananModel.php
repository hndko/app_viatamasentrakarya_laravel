<?php

namespace App\Models;

use App\Models\LayananModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DeskripsiLayananModel extends Model
{
    use HasFactory;

    protected $table = 'tb_deskripsi_layanan';

    protected $primaryKey = 'deskripsi_id';

    protected $fillable = [
        'layanan_id',
        'deskripsi',
    ];

    /**
     * Relationship dengan model LayananModel
     */
    public function layanan()
    {
        return $this->belongsTo(LayananModel::class, 'layanan_id', 'layanan_id');
    }
}

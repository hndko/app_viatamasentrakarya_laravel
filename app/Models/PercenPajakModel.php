<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PercenPajakModel extends Model
{
    use HasFactory;

    protected $table = 'tb_percenpajak';

    protected $primaryKey = 'percenpajak_id';

    protected $fillable = [
        'ppn',
        'pph',
    ];
}

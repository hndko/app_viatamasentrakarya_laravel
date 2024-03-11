<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KBLIModel extends Model
{
    use HasFactory;
    protected $table = 'tb_kbli';
    protected $primaryKey = 'kbli_id';
    protected $fillable = ['sampul', 'judul', 'deskripsi', 'file_uploaded'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SNKModel extends Model
{
    use HasFactory;
    protected $table = 'tb_snk';
    protected $primaryKey = 'snk_id';
    protected $fillable = ['sampul'];
}

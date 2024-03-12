<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpaceOfficeModel extends Model
{
    use HasFactory;
    protected $table = 'tb_space_office';
    protected $primaryKey = 'space_office_id';
    protected $fillable = ['judul', 'deskripsi', 'sampul'];
}

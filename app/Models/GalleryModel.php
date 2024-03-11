<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryModel extends Model
{
    use HasFactory;
    protected $table = 'tb_gallery';
    protected $primaryKey = 'gallery_id';
    protected $fillable = ['sampul'];
}

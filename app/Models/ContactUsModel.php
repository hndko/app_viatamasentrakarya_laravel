<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsModel extends Model
{
    use HasFactory;
    protected $table = 'tb_contact_us';
    protected $primaryKey = 'contact_id';
    protected $fillable = [
        'nama_lengkap', 'email', 'subject', 'message'
    ];
}

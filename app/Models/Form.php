<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'nomor_whatsapp', 'alamat_lengkap', 'tempat_tgl_lahir', 'pekerjaan', 'nama_usaha', 'bukti_po', 'invoice'
    ];
}

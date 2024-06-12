<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;

    public $table = 'penjualans';

const CREATED_AT = 'created_at';
const UPDATED_AT = 'updated_at';

protected $auditTimestamps = true;

public $fillable = [
'id',
'id_penjualan',
'customer_id',
'id_staff',
'link_website',
'tanggal_pengambilan',
'jumlah_harga',
];
}

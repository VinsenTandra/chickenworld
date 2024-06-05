<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    use HasFactory;

    public $table = 'penjualans';

const CREATED_AT = 'created_at';
const UPDATED_AT = 'updated_at';

protected $auditTimestamps = true;

public $fillable = [
'id',
'id_penjualan',
'kode_produk',
'Form_PO',
'jumlah',
];
}

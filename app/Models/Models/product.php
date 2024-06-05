<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public $table = 'penjualans';

const CREATED_AT = 'created_at';
const UPDATED_AT = 'updated_at';

protected $auditTimestamps = true;

public $fillable = [
'id',
'kode_produk',
'nama_produk',
'harga',
];
}

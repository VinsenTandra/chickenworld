<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
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
        'tanggal_pengambilan',
        'jumlah_harga',
    ];

    public static function numberGenerator() {
        $penjualan = Penjualan::orderBy('id', 'DESC')->first();

        if ($penjualan) {
            $nomor_pesanan = explode("-", $penjualan->nomor_pesanan)[1];
            $count_permintaan = $nomor_pesanan + 1;
        } else {
            $count_permintaan = 1;
        }

        $number = sprintf("%05d", $count_permintaan);
        return "CW-{$number}";
    }

    public function product() {
        return $this->belongsTo("App\Models\Product", 'product_id');
    }
}

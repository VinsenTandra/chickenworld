<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjual extends Model
{
    use HasFactory;

    public $table = 'penjual';

const CREATED_AT = 'created_at';
const UPDATED_AT = 'updated_at';

protected $auditTimestamps = true;

public $fillable = [
'id',
'owner_id',
'ind_staff',
'nama',
];

}

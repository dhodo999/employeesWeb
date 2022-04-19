<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
    protected $table = 'kas';
    protected $primaryKey = 'id';
    protected $fillable = ['tanggal', 'saldo', 'pemasukan', 'pembayaran'];
}



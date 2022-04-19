<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $table = 'laptop';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'merk', 'serial', 'tglambil'];
}

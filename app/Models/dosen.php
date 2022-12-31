<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;
    protected $table = "dosens";
    protected $dates = ['created_at'];
    public $incrementing = false;
    protected $keyType="string";
     protected $fillable=['nip','nama','alamat','prodi','matakuliah','created_at','updated_at'];
}

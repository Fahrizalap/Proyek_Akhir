<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswa";
    protected $dates = ['created_at'];
    public $incrementing = false;
    protected $keyType="string";
     protected $fillable=['nim','nama','alamat','prodi','semester','created_at','updated_at'];
}

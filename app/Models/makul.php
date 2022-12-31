<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class makul extends Model
{
    use HasFactory;
    protected $table = "makul";
    protected $dates = ['created_at'];
    public $incrementing = false;
    protected $keyType="string";
     protected $fillable=['makul','dosen','tempat','hari','sks','created_at','updated_at'];
}

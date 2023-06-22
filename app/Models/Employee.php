<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = []; //agar bisa menginput semua jenis file tanpa menulis ulang spt $fillabel
    protected $dates = ['created_at']; 
}

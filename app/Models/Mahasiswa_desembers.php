<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa_desembers extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa_desembers'; // Ensure this matches your database table name
    protected $fillable = ['nama', 'email', 'password', 'jenis_kelamin'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenduduk extends Model
{
    use HasFactory;
    protected $table = 'data_penduduks';
    protected $fillable = ['id', 'foto', 'nik', 'tag_idcard', 'name', 'jenis_kelamin', 'ttl', 'golongan_darah', 'pendidikan'];
}
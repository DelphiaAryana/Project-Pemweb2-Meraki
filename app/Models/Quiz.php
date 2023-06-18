<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $table = 'data_soal';

    protected $fillable = ['soal', 'jawaban_a', 'jawaban_b', 'jawaban_c', 'jawaban_d', 'kunci_jawaban', 'image'];
}

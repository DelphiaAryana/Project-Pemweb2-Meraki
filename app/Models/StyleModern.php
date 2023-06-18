<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StyleModern extends Model
{
    use HasFactory;
    protected $table = 'modern_style';

    protected $fillable = ['jenis', 'image'];
}
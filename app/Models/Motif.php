<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Motif extends Model
{
    use HasFactory;
    protected $table = 'motif_sasirangan';

    protected $fillable = ['nama', 'deskripsi', 'image'];
}
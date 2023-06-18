<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;
    protected $table = 'data_poin';
    protected $fillable = ['id_user', 'poin_kuis'];

    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}

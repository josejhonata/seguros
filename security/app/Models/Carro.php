<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;
       protected $fillable = [
        'cor',
        'modelo',
        'ano',
        'user_id',
    ];
    public function users(){
    return	$this->belongTo(User::class);
    }
}

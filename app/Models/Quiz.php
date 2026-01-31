<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    // ここに追記します！
    // これにより、create関数での保存が許可されます
    protected $fillable = ['name', 'type']; 
}
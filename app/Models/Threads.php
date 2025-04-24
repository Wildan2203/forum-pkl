<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Threads extends Model
{
    use HasFactory;
    protected $table = 'tb_threads';
    protected $guarded = [];
    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jbt extends Model
{
    use HasFactory;
    protected $fillable = ['jbt', 'name'];
    protected $table = 'jbt';
    public $timestamps = false;
}

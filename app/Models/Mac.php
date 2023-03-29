<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mac extends Model
{
    use HasFactory;
    protected $fillable = ['mac', 'remark', 'chtime', 'chuser'];
    protected $table = 'mac';
    protected $primaryKey = 'mac';
    public $incrementing = false;
    public $timestamps = false;
}

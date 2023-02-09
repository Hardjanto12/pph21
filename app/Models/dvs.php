<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dvs extends Model
{
    use HasFactory;

    protected $fillable = ['dvs', 'name', 'chtime', 'chuser'];
    protected $table = 'dvs';
    public $timestamps = false;

    public function kry()
    {
        return $this->hasMany(kry::class);
    }
}

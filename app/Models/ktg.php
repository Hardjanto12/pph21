<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ktg extends Model
{
    use HasFactory;

    protected $fillable = ['ktg', 'name', 'chtime', 'chuser'];
    protected $table = 'ktg';
    protected $primaryKey = 'ktg';
    public $incrementing = false;
    public $timestamps = false;

    public function mgj()
    {
        return $this->hasMany(mgj::class);
    }
}

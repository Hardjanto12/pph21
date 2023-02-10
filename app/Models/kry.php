<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kry extends Model
{
    protected $table = 'kry';
    public $timestamps = false;
    protected $fillable = [
        'kry',
        'nik',
        'asr',
        'dvs',
        'jbt',
        'name',
        'alamat',
        'kota',
        'telp',
        'chtime',
        'chuser'
    ];

    public function dvs()
    {
        return $this->belongsTo(dvs::class, 'dvs');
    }
    public function asr()
    {
        return $this->belongsTo(asr::class, 'asr');
    }
    public function jbt()
    {
        return $this->belongsTo(jbt::class, 'jbt');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode',
        'kursi',
        'waktu',
        'total',
        'status',
        'detail_id',
        'pembeli_id',
        'penjual_id'
    ];

    public function rute()
    {
        return $this->belongsTo('App\Models\detail', 'detail_id');
    }

    public function penumpang()
    {
        return $this->belongsTo('App\Models\User', 'pembeli_id');
    }

    public function petugas()
    {
        return $this->belongsTo('App\Models\User', 'penjual_id');
    }

    protected $table = 'pemesanan';
}

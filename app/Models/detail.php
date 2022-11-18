<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'nama_konser',
        'harga',
        'jam',
        'tiket_id'
    ];

    public function transportasi()
    {
        return $this->belongsTo('App\Models\tiket', 'tiket_id');
    }

    protected $table = 'detail';
}

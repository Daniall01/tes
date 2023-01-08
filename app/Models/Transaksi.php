<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public function detail(){
        return $this->belongsTo(Detail::class);
    }

    public function member(){
        return $this->belongsTo(Member::class);
    }
}

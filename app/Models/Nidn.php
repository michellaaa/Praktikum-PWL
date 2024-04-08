<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nidn extends Model
{
    use HasFactory;

    protected $table = 'Nidn';

    protected $premaryKey = 'id_nidn';

    public function dosen(){
        return $this->belongsTo(Dosen::class);
    }
}

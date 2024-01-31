<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;
    protected $table = 'pesertas';
    protected $primaryKey = 'id_peserta';
    protected $fillable = [
        'kd_peserta','kd_skema','nm_peserta', 'jekel','alamat','no_hp'
    ];

    public function skema()
    {
        return $this->belongsTo(Skema::class, 'kd_skema', 'kd_skema');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;

class Movie extends Model
{
    use HasFactory;
    protected $table = "movie";
    protected $primaryKey = "id";
    protected $fillable = [
        'title',
        'price',
        'kategori_id'
    ];

    public function kategori() {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }
}

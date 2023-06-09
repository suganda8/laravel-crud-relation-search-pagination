<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Kategori extends Model
{
    use HasFactory;

    protected $table = "kategori";
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $fillable = [
        'title',
        'description',
        'pict',
        'views'
    ];

    public function movie() {
        return hasMany(Movie::class);
    }
}

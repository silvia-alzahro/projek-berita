<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $visible = ['nama_kategori'];
    protected $fillable = ['nama_kategori'];
    public $timestamps = true;

    public function beritas()
    {
        return $this->hasMany('App\Models\Berita', 'id_kategori');

    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $visible = ['judul', 'isi', 'id_kategori', 'poto', 'nama_penulis', 'tanggal'];
    protected $fillable = ['judul', 'isi', 'id_kategori', 'poto', 'nama_penulis', 'tanggal'];
    public $timestamps= true;

    public function kategori()
    {
        // data dari Model "Book" bisa dimiliki oleh model "Author"
        // melalui fk "author_id"
        return $this->belongsTo('App\Models\Kategori', 'id_kategori');
    }
    public function image(){
        if ($this->poto && file_exists(public_path('image/berita/' . $this->poto))){
            return asset('image/berita/' . $this->poto);
        }else{
            return asset('image/no_image.png');
        }
    }
    public function deleteImage(){
        if ($this->poto && file_exists(public_path('image/berita/' . $this->poto))){
            return unlink(public_path('image/berita/' . $this->poto));
        }
    }
}


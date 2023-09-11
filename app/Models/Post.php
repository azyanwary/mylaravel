<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    

    // HUBUNGAN TIAP TABEL

    //untuk menambahkan data semua di tinker, (menggunakan $post -> create([])), data yang boleh diisi sisanya tidak boleh
    // protected $fillable =['title', 'excerpt', 'body'];

    // data yang tidak boleh boleh diisi sisanya boleh
    protected $guarded = ['id'];

    public function category(){

        return $this->belongsTo(Category::class);
    }

    // ketika database berbeda dengan methor yang dibuat, maka buat inisiasi, contoh, di database tidak ada table author, maka inisiasi dengan field yang ada "user_id" pada tabel yang diinginkan
    public function author(){

        return $this->belongsTo(User::class,'user_id');
    }
}

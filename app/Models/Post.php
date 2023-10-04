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
    protected $with = ['category', 'author'];
    

    public function scopeFilter($query, array $filters){

        // versi Isset
        // isset digunakan untuk memeriksa apakah suatu variabel sudah diatur atau belum
        // operator ternary simbol ? dugunakan untuk ketika ada kondisi true dan false, untuk falsenya gunakan simbol : diawalnya
            // if(isset($filters['search']) ? $filters['search'] : false){
            //     return $query->where('title', 'like', '%' . $filters['search'] . '%' )
            //         ->orWhere('body', 'like', '%' . $filters['search'] . '%');
            // }
        
        // Versi Callback
        // when digunakan dan dijalankan ketika first argument/perintah bersifat true untuk mempermudah kan kondisinya ketika if nya banyak jadi menggunakan when, fungsi sama seperti diatas namun diganti notasi
        // null coalescing operator untuk mengganti isset ,menjadi fungsi dan mempermudah sintak agar lebih sedikit
        // orWehere digunakan untuk mencari dengan perintah atau
        $query->when($filters['search'] ??  false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%' )
            ->orWhere('body', 'like', '%' . $search . '%');
        });

        // whereHas adalah relationship yang dimana bisa meanggil fungsi lain didalam query itu
        // use digunakan ketika $category pertama tidak bisa terbaca 
        $query->when($filters['category'] ??  false, function($query, $category){
            return $query->whereHas('category', function($query) use($category) {
                $query->where('slug', $category);
            });

        });

        // Versi Arraow Function
        // Arrow Function inisiasi untuk function jadi fn dan kutawal jadi => hampir sama dengan yg atas tapi lebih simpel, dan juga tanpa harus menggunakan use karena sudah terbaca
        $query->when($filters['author'] ??  false, fn($query, $author)
            => $query->whereHas('author', fn($query) 
                =>$query->where('username', $author)
            )
        );
    }


    public function category(){

        return $this->belongsTo(Category::class);
    }

    // ketika database berbeda dengan methor yang dibuat, maka buat inisiasi, contoh, di database tidak ada table author, maka inisiasi dengan field yang ada "user_id" pada tabel yang diinginkan
    public function author(){

        return $this->belongsTo(User::class,'user_id');
    }
}

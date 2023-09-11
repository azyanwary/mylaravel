<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "tittle" => "judul Post Pertama",
            "slug" => "judul-Post-Pertama",
            "author" => " spongebob",
            "body" => " Organisasi atau pertubuhan (bahasa Belanda: organisatie) merupakan sekumpulan dua orang atau lebih yang berkumpul dalam wadah yang sama dan memiliki satu tujuan. 
            sumber daya baik dengan metode, material, lingkungan dan uang serta sarana dan prasarana, dan lain sebagainya dengan efisien dan efektif untuk bisa mencapai tujuan organisasi.
            [1]Dalam lingkup ilmu-ilmu sosial, organisasi dipelajari sebagai objek penelitian oleh antara lain ilmu sosiologi, ekonomi, politik, psikologi, antropologi, sejarah, 
            dan manajemen."
        ],
        [
            "tittle" => "judul Post kedua",
            "slug" => "judul-Post-kedua",
            "author" => " patrick",
            "body" => "Components and slots provide similar benefits to sections, layouts, and includes; however, some may find the mental model of components and slots easier to understand. There are two approaches to writing components: class based components and anonymous components.."
        ]
    ];

    public static function all(){
       
        return collect(self::$blog_posts);
    }

    // HUBUNGAN TIAP TABEL

    public static function find($slug){
    
        $posts = static::all();
        return $posts ->firstWhere('slug', $slug);
    }
    
}

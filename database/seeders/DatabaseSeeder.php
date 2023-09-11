<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        
        // User::Create([
        //     'name' => 'Sponegbob',
        //     'email'=> 'spongebob@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);
        // User::Create([
        //     'name' => 'Patrick',
        //     'email'=> 'patrick@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);

        User::factory(3)->create();

        Category::create([
            'name'=> 'Web Programming',
            'slug'=> 'web-programming'

        ]);
        Category::create([
            'name'=> 'Personal',
            'slug'=> 'personal'

        ]);

         Post::factory(20)->create();


        // Post::create([
        //     'title'=> 'Judul Pertama',
        //     'slug'=> 'judul-pertama',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, iusto.',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptas optio iure quibusdam pariatur obcaecati, consequuntur, porro dolorem, fuga amet saepe accusamus! Mollitia doloribus saepe voluptatibus reprehenderit. Tempora quibusdam rerum, nulla earum sunt consectetur ullam! Tempora molestiae, laboriosam ex cupiditate nesciunt eaque officiis numquam, deserunt perspiciatis dignissimos et minus. Libero.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto laboriosam, quae corporis, sed rem vero perspiciatis rerum nihil quasi magni nulla dolorum quia reiciendis corrupti praesentium suscipit fugit? Adipisci ipsum ut, corrupti facilis magnam, laboriosam laudantium eos illo aut, similique blanditiis dolore. Deserunt aliquam amet optio ex, at similique obcaecati odit, accusamus earum provident quod architecto, in suscipit? Vero, aperiam. Dicta excepturi architecto rerum unde eos modi ipsum exercitationem illo incidunt sapiente error quisquam, ad itaque quidem reiciendis a praesentium.Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus officiis odit rem dolores assumenda, vel hic deserunt, eum sed deleniti quibusdam veniam sunt! Quas, exercitationem nulla. Fugiat nisi quos exercitationem dicta aliquid veniam doloribus porro, possimus sit alias voluptate itaque!',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title'=> 'Judul Kedua',
        //     'slug'=> 'judul-Kedua',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, iusto.',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptas optio iure quibusdam pariatur obcaecati, consequuntur, porro dolorem, fuga amet saepe accusamus! Mollitia doloribus saepe voluptatibus reprehenderit. Tempora quibusdam rerum, nulla earum sunt consectetur ullam! Tempora molestiae, laboriosam ex cupiditate nesciunt eaque officiis numquam, deserunt perspiciatis dignissimos et minus. Libero.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto laboriosam, quae corporis, sed rem vero perspiciatis rerum nihil quasi magni nulla dolorum quia reiciendis corrupti praesentium suscipit fugit? Adipisci ipsum ut, corrupti facilis magnam, laboriosam laudantium eos illo aut, similique blanditiis dolore. Deserunt aliquam amet optio ex, at similique obcaecati odit, accusamus earum provident quod architecto, in suscipit? Vero, aperiam. Dicta excepturi architecto rerum unde eos modi ipsum exercitationem illo incidunt sapiente error quisquam, ad itaque quidem reiciendis a praesentium.Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus officiis odit rem dolores assumenda, vel hic deserunt, eum sed deleniti quibusdam veniam sunt! Quas, exercitationem nulla. Fugiat nisi quos exercitationem dicta aliquid veniam doloribus porro, possimus sit alias voluptate itaque!',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title'=> 'Judul Ketiga',
        //     'slug'=> 'judul-ketiga',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, iusto.',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptas optio iure quibusdam pariatur obcaecati, consequuntur, porro dolorem, fuga amet saepe accusamus! Mollitia doloribus saepe voluptatibus reprehenderit. Tempora quibusdam rerum, nulla earum sunt consectetur ullam! Tempora molestiae, laboriosam ex cupiditate nesciunt eaque officiis numquam, deserunt perspiciatis dignissimos et minus. Libero.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto laboriosam, quae corporis, sed rem vero perspiciatis rerum nihil quasi magni nulla dolorum quia reiciendis corrupti praesentium suscipit fugit? Adipisci ipsum ut, corrupti facilis magnam, laboriosam laudantium eos illo aut, similique blanditiis dolore. Deserunt aliquam amet optio ex, at similique obcaecati odit, accusamus earum provident quod architecto, in suscipit? Vero, aperiam. Dicta excepturi architecto rerum unde eos modi ipsum exercitationem illo incidunt sapiente error quisquam, ad itaque quidem reiciendis a praesentium.Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus officiis odit rem dolores assumenda, vel hic deserunt, eum sed deleniti quibusdam veniam sunt! Quas, exercitationem nulla. Fugiat nisi quos exercitationem dicta aliquid veniam doloribus porro, possimus sit alias voluptate itaque!',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
        // Post::create([
        //     'title'=> 'Judul keempat',
        //     'slug'=> 'judul-keempat',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, iusto.',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptas optio iure quibusdam pariatur obcaecati, consequuntur, porro dolorem, fuga amet saepe accusamus! Mollitia doloribus saepe voluptatibus reprehenderit. Tempora quibusdam rerum, nulla earum sunt consectetur ullam! Tempora molestiae, laboriosam ex cupiditate nesciunt eaque officiis numquam, deserunt perspiciatis dignissimos et minus. Libero.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto laboriosam, quae corporis, sed rem vero perspiciatis rerum nihil quasi magni nulla dolorum quia reiciendis corrupti praesentium suscipit fugit? Adipisci ipsum ut, corrupti facilis magnam, laboriosam laudantium eos illo aut, similique blanditiis dolore. Deserunt aliquam amet optio ex, at similique obcaecati odit, accusamus earum provident quod architecto, in suscipit? Vero, aperiam. Dicta excepturi architecto rerum unde eos modi ipsum exercitationem illo incidunt sapiente error quisquam, ad itaque quidem reiciendis a praesentium.Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus officiis odit rem dolores assumenda, vel hic deserunt, eum sed deleniti quibusdam veniam sunt! Quas, exercitationem nulla. Fugiat nisi quos exercitationem dicta aliquid veniam doloribus porro, possimus sit alias voluptate itaque!',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);

    }
    
}

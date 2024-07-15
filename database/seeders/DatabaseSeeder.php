<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

        User::create([
            'name' => 'Arya Budi Raharja',
            'email' => 'raharjaarya666@gmail.com',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'name' => 'Nisrina Mahira',
            'email' => 'misrinamahira05@gmail.com',
            'password' => bcrypt('123'),
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates dolor inventore id eligendi aut necessitatibus, expedita aspernatur quod distinctio quasi.'
        ]);
        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates dolor inventore id eligendi aut necessitatibus, expedita aspernatur quod distinctio quasi.'
        ]);
        Category::create([
            'name' => 'Web Security',
            'slug' => 'web-security',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates dolor inventore id eligendi aut necessitatibus, expedita aspernatur quod distinctio quasi.'
        ]);
        Category::create([
            'name' => 'Hosting and Infrastructure',
            'slug' => 'hosting-and-infrastructure',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates dolor inventore id eligendi aut necessitatibus, expedita aspernatur quod distinctio quasi.'
        ]);
        Category::create([
            'name' => 'Tutorials and Guides',
            'slug' => 'tutorials-and-guide',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates dolor inventore id eligendi aut necessitatibus, expedita aspernatur quod distinctio quasi.'
          ]);
          
          Category::create([
            'name' => 'Trends and Emerging Technologies',
            'slug' => 'trends-and-emrging-technologies',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates dolor inventore id eligendi aut necessitatibus, expedita aspernatur quod distinctio quasi.'
          ]);
          Category::create([
            'name' => 'E-commerce and Online Business',
            'slug' => 'e-commerce-and-online-business',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates dolor inventore id eligendi aut necessitatibus, expedita aspernatur quod distinctio quasi.'
          ]);
          Category::create([
            'name' => 'User Experience',
            'slug' => 'user-experience',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates dolor inventore id eligendi aut necessitatibus, expedita aspernatur quod distinctio quasi.'
          ]);

          Post::create([
            'title' => 'Judul Pertama',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quo labore voluptatum nobis vero? Tenetur voluptas neque iste voluptatibus deleniti quidem fugit, alias reprehenderit quam eos minima enim molestias cum.',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis porro similique
            iste, repellendus velit quas, corrupti neque facere consequuntur inventore
            aliquid aperiam perferendis molestiae qui consequatur eos ex et laudantium
            quibusdam. Natus quibusdam itaque obcaecati consequuntur aliquid incidunt beatae
            quae doloribus asperiores, consequatur, praesentium sapiente accusamus? Aperiam,
            corporis. </p>
            
            <p>Cupiditate culpa rem molestias, iure quidem quis ducimus eum qui
            tenetur blanditiis repudiandae ipsum dignissimos placeat fugiat voluptatum
            laboriosam fugit doloribus. Veniam eligendi tenetur dolore ipsa voluptatibus
            cupiditate minima officia voluptas eius ex quo soluta, eum earum veritatis
            assumenda. Consequuntur eius in velit possimus dolor earum repellat voluptate
            rerum. Quas, laboriosam aliquid.
            </p>',

            ]);
            Post::create([
                'title' => 'Judul Kedua',
                'category_id' => 1,
                'user_id' => 2,
                'slug' => 'judul-kedua',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quo labore voluptatum nobis vero? Tenetur voluptas neque iste voluptatibus deleniti quidem fugit, alias reprehenderit quam eos minima enim molestias cum.',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis porro similique
                iste, repellendus velit quas, corrupti neque facere consequuntur inventore
                aliquid aperiam perferendis molestiae qui consequatur eos ex et laudantium
                quibusdam. Natus quibusdam itaque obcaecati consequuntur aliquid incidunt beatae
                quae doloribus asperiores, consequatur, praesentium sapiente accusamus? Aperiam,
                corporis. </p>
                
                <p>Cupiditate culpa rem molestias, iure quidem quis ducimus eum qui
                tenetur blanditiis repudiandae ipsum dignissimos placeat fugiat voluptatum
                laboriosam fugit doloribus. Veniam eligendi tenetur dolore ipsa voluptatibus
                cupiditate minima officia voluptas eius ex quo soluta, eum earum veritatis
                assumenda. Consequuntur eius in velit possimus dolor earum repellat voluptate
                rerum. Quas, laboriosam aliquid.
                </p>',
                
                
    
                ]);
                Post::create([
                    'title' => 'Judul Ketiga',
                    'category_id' => 2,
                    'user_id' => 1,
                    'slug' => 'judul-ketiga',
                    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quo labore voluptatum nobis vero? Tenetur voluptas neque iste voluptatibus deleniti quidem fugit, alias reprehenderit quam eos minima enim molestias cum.',
                    'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis porro similique
                    iste, repellendus velit quas, corrupti neque facere consequuntur inventore
                    aliquid aperiam perferendis molestiae qui consequatur eos ex et laudantium
                    quibusdam. Natus quibusdam itaque obcaecati consequuntur aliquid incidunt beatae
                    quae doloribus asperiores, consequatur, praesentium sapiente accusamus? Aperiam,
                    corporis. </p>
                    
                    <p>Cupiditate culpa rem molestias, iure quidem quis ducimus eum qui
                    tenetur blanditiis repudiandae ipsum dignissimos placeat fugiat voluptatum
                    laboriosam fugit doloribus. Veniam eligendi tenetur dolore ipsa voluptatibus
                    cupiditate minima officia voluptas eius ex quo soluta, eum earum veritatis
                    assumenda. Consequuntur eius in velit possimus dolor earum repellat voluptate
                    rerum. Quas, laboriosam aliquid.
                    </p>',
                  
        
                    ]);
                    Post::create([
                        'title' => 'Judul Keempat',
                        'category_id' => 3,
                        'user_id' => 2,
                        'slug' => 'judul-keempat',
                        'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quo labore voluptatum nobis vero? Tenetur voluptas neque iste voluptatibus deleniti quidem fugit, alias reprehenderit quam eos minima enim molestias cum.',
                        'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis porro similique
                        iste, repellendus velit quas, corrupti neque facere consequuntur inventore
                        aliquid aperiam perferendis molestiae qui consequatur eos ex et laudantium
                        quibusdam. Natus quibusdam itaque obcaecati consequuntur aliquid incidunt beatae
                        quae doloribus asperiores, consequatur, praesentium sapiente accusamus? Aperiam,
                        corporis. </p>
                        
                        <p>Cupiditate culpa rem molestias, iure quidem quis ducimus eum qui
                        tenetur blanditiis repudiandae ipsum dignissimos placeat fugiat voluptatum
                        laboriosam fugit doloribus. Veniam eligendi tenetur dolore ipsa voluptatibus
                        cupiditate minima officia voluptas eius ex quo soluta, eum earum veritatis
                        assumenda. Consequuntur eius in velit possimus dolor earum repellat voluptate
                        rerum. Quas, laboriosam aliquid.
                        </p>',
                        
            
                        ]);
                        Post::create([
                            'title' => 'Judul Kelima',
                            'category_id' => '4',
                            'user_id' => 1,
                            'slug' => 'judul-kelima',
                            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quo labore voluptatum nobis vero? Tenetur voluptas neque iste voluptatibus deleniti quidem fugit, alias reprehenderit quam eos minima enim molestias cum.',
                            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis porro similique
                            iste, repellendus velit quas, corrupti neque facere consequuntur inventore
                            aliquid aperiam perferendis molestiae qui consequatur eos ex et laudantium
                            quibusdam. Natus quibusdam itaque obcaecati consequuntur aliquid incidunt beatae
                            quae doloribus asperiores, consequatur, praesentium sapiente accusamus? Aperiam,
                            corporis. </p>
                            
                            <p>Cupiditate culpa rem molestias, iure quidem quis ducimus eum qui
                            tenetur blanditiis repudiandae ipsum dignissimos placeat fugiat voluptatum
                            laboriosam fugit doloribus. Veniam eligendi tenetur dolore ipsa voluptatibus
                            cupiditate minima officia voluptas eius ex quo soluta, eum earum veritatis
                            assumenda. Consequuntur eius in velit possimus dolor earum repellat voluptate
                            rerum. Quas, laboriosam aliquid.
                            </p>',
                            
                            
                
                            ]);
                            Post::create([
                                'title' => 'Judul Keenam',
                                'category_id' => '7',
                                'user_id' => 2,
                                'slug' => 'judul-keenam',
                                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quo labore voluptatum nobis vero? Tenetur voluptas neque iste voluptatibus deleniti quidem fugit, alias reprehenderit quam eos minima enim molestias cum.',
                                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis porro similique
                                iste, repellendus velit quas, corrupti neque facere consequuntur inventore
                                aliquid aperiam perferendis molestiae qui consequatur eos ex et laudantium
                                quibusdam. Natus quibusdam itaque obcaecati consequuntur aliquid incidunt beatae
                                quae doloribus asperiores, consequatur, praesentium sapiente accusamus? Aperiam,
                                corporis. </p>
                                
                                <p>Cupiditate culpa rem molestias, iure quidem quis ducimus eum qui
                                tenetur blanditiis repudiandae ipsum dignissimos placeat fugiat voluptatum
                                laboriosam fugit doloribus. Veniam eligendi tenetur dolore ipsa voluptatibus
                                cupiditate minima officia voluptas eius ex quo soluta, eum earum veritatis
                                assumenda. Consequuntur eius in velit possimus dolor earum repellat voluptate
                                rerum. Quas, laboriosam aliquid.
                                </p>',
                               
                                ]);


      

                        // Post::factory(20)->create();
        
        //  // Membuat postingan secara spesifik di kategori "Kuliner dan Resep"
        //  Post::factory()->count(15)->create([
        //     'category_id' => Category::where('slug', 'kuliner-dan-resep')->first()->id
        // ]);

        // Post::create([
        //     'title' => 'Resep Mie Goreng Lezat',
        //     'slug' => 'resep-mie-goreng-lezat',
        //     'excerpt' => 'Ini adalah resep mie goreng yang sangat lezat dan mudah dibuat.',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero similique quis eius officia dignissimos?',
        //     'category_id' => 3,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Cara Membuat Soto Ayam',
        //     'slug' => 'cara-membuat-soto-ayam',
        //     'excerpt' => 'Panduan lengkap cara membuat soto ayam yang enak dan lezat.',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero similique quis eius officia dignissimos?',
        //     'category_id' => 3,
        //     'user_id' => 2,
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero similique quis eius officia dignissimos? Sapiente quisquam beatae, maxime consectetur numquam porro voluptas eligendi.',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero similique quis eius officia dignissimos? Sapiente quisquam beatae, maxime consectetur numquam porro voluptas eligendi. Obcaecati eveniet magnam vero voluptatem ab at inventore odio reiciendis eum? Ullam molestias nostrum facilis ipsum fuga! Nostrum odio non rem voluptatibus ex ea a in quia, culpa, ipsa enim vel atque illo, inventore accusamus nemo asperiores ipsam modi aspernatur! Dolore itaque assumenda nihil ex, excepturi dicta molestias natus ab praesentium neque. Officiis harum pariatur itaque quia saepe esse commodi fugit alias neque. Fugiat, accusantium harum! Quo esse enim iste. Laboriosam nulla ab nihil praesentium incidunt?',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero similique quis eius officia dignissimos? Sapiente quisquam beatae, maxime consectetur numquam porro voluptas eligendi.',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero similique quis eius officia dignissimos? Sapiente quisquam beatae, maxime consectetur numquam porro voluptas eligendi. Obcaecati eveniet magnam vero voluptatem ab at inventore odio reiciendis eum? Ullam molestias nostrum facilis ipsum fuga! Nostrum odio non rem voluptatibus ex ea a in quia, culpa, ipsa enim vel atque illo, inventore accusamus nemo asperiores ipsam modi aspernatur! Dolore itaque assumenda nihil ex, excepturi dicta molestias natus ab praesentium neque. Officiis harum pariatur itaque quia saepe esse commodi fugit alias neque. Fugiat, accusantium harum! Quo esse enim iste. Laboriosam nulla ab nihil praesentium incidunt?',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero similique quis eius officia dignissimos? Sapiente quisquam beatae, maxime consectetur numquam porro voluptas eligendi.',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero similique quis eius officia dignissimos? Sapiente quisquam beatae, maxime consectetur numquam porro voluptas eligendi. Obcaecati eveniet magnam vero voluptatem ab at inventore odio reiciendis eum? Ullam molestias nostrum facilis ipsum fuga! Nostrum odio non rem voluptatibus ex ea a in quia, culpa, ipsa enim vel atque illo, inventore accusamus nemo asperiores ipsam modi aspernatur! Dolore itaque assumenda nihil ex, excepturi dicta molestias natus ab praesentium neque. Officiis harum pariatur itaque quia saepe esse commodi fugit alias neque. Fugiat, accusantium harum! Quo esse enim iste. Laboriosam nulla ab nihil praesentium incidunt?',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero similique quis eius officia dignissimos? Sapiente quisquam beatae, maxime consectetur numquam porro voluptas eligendi.',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero similique quis eius officia dignissimos? Sapiente quisquam beatae, maxime consectetur numquam porro voluptas eligendi. Obcaecati eveniet magnam vero voluptatem ab at inventore odio reiciendis eum? Ullam molestias nostrum facilis ipsum fuga! Nostrum odio non rem voluptatibus ex ea a in quia, culpa, ipsa enim vel atque illo, inventore accusamus nemo asperiores ipsam modi aspernatur! Dolore itaque assumenda nihil ex, excepturi dicta molestias natus ab praesentium neque. Officiis harum pariatur itaque quia saepe esse commodi fugit alias neque. Fugiat, accusantium harum! Quo esse enim iste. Laboriosam nulla ab nihil praesentium incidunt?',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);

    }
}

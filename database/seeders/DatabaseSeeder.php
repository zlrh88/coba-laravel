<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores numquam impedit voluptate nobis debitis excepturi?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, optio. Esse magni facere exercitationem ab, quae hic cumque. Commodi sequi, animi obcaecati, impedit quos possimus non dicta id pariatur, cum repellat eius voluptatem sed necessitatibus voluptate accusamus dignissimos adipisci odit asperiores incidunt vel voluptates. Assumenda saepe vero unde architecto.</p>  <p> Asperiores excepturi suscipit sed dolor, labore quisquam facere modi deserunt, possimus vitae iusto quae debitis perferendis sequi reprehenderit. Suscipit, dolore numquam maxime provident repellendus aut itaque?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores numquam impedit voluptate nobis debitis excepturi?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, optio. Esse magni facere exercitationem ab, quae hic cumque. Commodi sequi, animi obcaecati, impedit quos possimus non dicta id pariatur, cum repellat eius voluptatem sed necessitatibus voluptate accusamus dignissimos adipisci odit asperiores incidunt vel voluptates. Assumenda saepe vero unde architecto.</p>  <p> Asperiores excepturi suscipit sed dolor, labore quisquam facere modi deserunt, possimus vitae iusto quae debitis perferendis sequi reprehenderit. Suscipit, dolore numquam maxime provident repellendus aut itaque?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores numquam impedit voluptate nobis debitis excepturi?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, optio. Esse magni facere exercitationem ab, quae hic cumque. Commodi sequi, animi obcaecati, impedit quos possimus non dicta id pariatur, cum repellat eius voluptatem sed necessitatibus voluptate accusamus dignissimos adipisci odit asperiores incidunt vel voluptates. Assumenda saepe vero unde architecto.</p>  <p> Asperiores excepturi suscipit sed dolor, labore quisquam facere modi deserunt, possimus vitae iusto quae debitis perferendis sequi reprehenderit. Suscipit, dolore numquam maxime provident repellendus aut itaque?</p>',
        //     'category_id' => 1,
        //     'user_id' => 2

        // ]);

        
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores numquam impedit voluptate nobis debitis excepturi?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, optio. Esse magni facere exercitationem ab, quae hic cumque. Commodi sequi, animi obcaecati, impedit quos possimus non dicta id pariatur, cum repellat eius voluptatem sed necessitatibus voluptate accusamus dignissimos adipisci odit asperiores incidunt vel voluptates. Assumenda saepe vero unde architecto.</p>  <p> Asperiores excepturi suscipit sed dolor, labore quisquam facere modi deserunt, possimus vitae iusto quae debitis perferendis sequi reprehenderit. Suscipit, dolore numquam maxime provident repellendus aut itaque?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        
        // Post::create([
        //     'title' => 'Judul Lima',
        //     'slug' => 'judul-lima',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores numquam impedit voluptate nobis debitis excepturi?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, optio. Esse magni facere exercitationem ab, quae hic cumque. Commodi sequi, animi obcaecati, impedit quos possimus non dicta id pariatur, cum repellat eius voluptatem sed necessitatibus voluptate accusamus dignissimos adipisci odit asperiores incidunt vel voluptates. Assumenda saepe vero unde architecto.</p>  <p> Asperiores excepturi suscipit sed dolor, labore quisquam facere modi deserunt, possimus vitae iusto quae debitis perferendis sequi reprehenderit. Suscipit, dolore numquam maxime provident repellendus aut itaque?</p>',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);

        Category::create([
            'name' => 'Progamming',
            'slug' => 'progamming'
        ]);

        Category::create([
            'name' => 'Web Progamming',
            'slug' => 'web-progamming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // User::create([
        //     'name' => 'Travis Bickle',
        //     'email' => 'travisbickle@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        //   User::create([
        //     'name' => 'Patrick Bateman',
        //     'email' => 'patrickbatemane@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(5)->create();
        Post::factory(20)->create();









        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

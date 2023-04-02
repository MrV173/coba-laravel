<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            User::create([
                'name' => 'ibnu hakim',
                'username' => 'ibnuhakim',
                'email' => 'ibnuhakim@gmail.com',
                'password'=> bcrypt('12341234')
            ]);

           // User::create([
                //'name' => 'bubb',
                //'email' => 'bubbb@gmail.com',
            //     'password'=> bcrypt('12345')
            // ]);

            User::factory(3)->create();

            Category::create([
                'name' => 'Web Programming',
                'slug' => 'web-programming'
            ]);

            Category::create([
                'name' => 'Personal',
                'slug' => 'personal'
            ]);

            Category::create([
                'name' => 'Web design',
                'slug' => 'web-design'
            ]);

            Post::factory(30)->create();

            // Post::create ([
            //     'title'=>'Judul pertama',
            //     'slug'=>'judul-pertama',
            //     'excerpt'=> 'orem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis dolorum deserunt asperiores eligendi incidunt explicabo veritatis illum reprehenderit quasi quam voluptatum nisi animi assumenda sapiente quo ut at quia neque, molestiae expedita ullam recusandae id architecto a. Itaque aspernatur, maxime, voluptatibus accusamus tenetur saepe ullam numquam mollitia est iusto corrupti?',
            //     'body'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, magnam laboriosam obcaecati quos dolore ratione, numquam quo voluptates dicta error, ab fuga voluptatem? Nisi veritatis numquam perspiciatis optio amet nemo culpa dolorum commodi cumque? Omnis earum, consequatur nobis sequi eos fuga eaque praesentium magni reiciendis quaerat eveniet non officiis dicta veritatis tempora laboriosam iusto a. Iusto dolorem nulla nihil, in est aperiam harum, reiciendis consectetur fugiat veniam aut quibusdam nesciunt officiis, assumenda quaerat a cupiditate et? Autem, amet sit ratione tenetur soluta illo voluptatibus facere id repudiandae numquam molestias, magni explicabo. Illo enim necessitatibus saepe porro autem nisi aliquam magni.',
            //     'category_id'=> 1,
            //     'user_id'=> 1
            // ]);
            
            // Post::create ([
            //     'title'=>'Judul Kedua',
            //     'slug'=>'judul-kedua',
            //     'excerpt'=>'orem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis dolorum deserunt asperiores eligendi incidunt explicabo veritatis illum reprehenderit quasi quam voluptatum nisi animi assumenda sapiente quo ut at quia neque, molestiae expedita ullam recusandae id architecto a. Itaque aspernatur, maxime, voluptatibus accusamus tenetur saepe ullam numquam mollitia est iusto corrupti?',
            //     'body'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, magnam laboriosam obcaecati quos dolore ratione, numquam quo voluptates dicta error, ab fuga voluptatem? Nisi veritatis numquam perspiciatis optio amet nemo culpa dolorum commodi cumque? Omnis earum, consequatur nobis sequi eos fuga eaque praesentium magni reiciendis quaerat eveniet non officiis dicta veritatis tempora laboriosam iusto a. Iusto dolorem nulla nihil, in est aperiam harum, reiciendis consectetur fugiat veniam aut quibusdam nesciunt officiis, assumenda quaerat a cupiditate et? Autem, amet sit ratione tenetur soluta illo voluptatibus facere id repudiandae numquam molestias, magni explicabo. Illo enim necessitatibus saepe porro autem nisi aliquam magni.',
            //     'category_id'=> 1,
            //     'user_id'=> 1
            // ]);

            // Post::create ([
            //     'title'=>'Judul Ketiga',
            //     'slug'=>'judul-ketiga',
            //     'excerpt'=> 'orem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis dolorum deserunt asperiores eligendi incidunt explicabo veritatis illum reprehenderit quasi quam voluptatum nisi animi assumenda sapiente quo ut at quia neque, molestiae expedita ullam recusandae id architecto a. Itaque aspernatur, maxime, voluptatibus accusamus tenetur saepe ullam numquam mollitia est iusto corrupti?',
            //     'body'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, magnam laboriosam obcaecati quos dolore ratione, numquam quo voluptates dicta error, ab fuga voluptatem? Nisi veritatis numquam perspiciatis optio amet nemo culpa dolorum commodi cumque? Omnis earum, consequatur nobis sequi eos fuga eaque praesentium magni reiciendis quaerat eveniet non officiis dicta veritatis tempora laboriosam iusto a. Iusto dolorem nulla nihil, in est aperiam harum, reiciendis consectetur fugiat veniam aut quibusdam nesciunt officiis, assumenda quaerat a cupiditate et? Autem, amet sit ratione tenetur soluta illo voluptatibus facere id repudiandae numquam molestias, magni explicabo. Illo enim necessitatibus saepe porro autem nisi aliquam magni.',
            //     'category_id'=> 2,
            //     'user_id'=>2
            // ]);

            // Post::create ([
            //     'title'=>'Judul Keempat',
            //     'slug'=>'judul-keempat',
            //     'excerpt'=> 'orem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis dolorum deserunt asperiores eligendi incidunt explicabo veritatis illum reprehenderit quasi quam voluptatum nisi animi assumenda sapiente quo ut at quia neque, molestiae expedita ullam recusandae id architecto a. Itaque aspernatur, maxime, voluptatibus accusamus tenetur saepe ullam numquam mollitia est iusto corrupti?',
            //     'body'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, magnam laboriosam obcaecati quos dolore ratione, numquam quo voluptates dicta error, ab fuga voluptatem? Nisi veritatis numquam perspiciatis optio amet nemo culpa dolorum commodi cumque? Omnis earum, consequatur nobis sequi eos fuga eaque praesentium magni reiciendis quaerat eveniet non officiis dicta veritatis tempora laboriosam iusto a. Iusto dolorem nulla nihil, in est aperiam harum, reiciendis consectetur fugiat veniam aut quibusdam nesciunt officiis, assumenda quaerat a cupiditate et? Autem, amet sit ratione tenetur soluta illo voluptatibus facere id repudiandae numquam molestias, magni explicabo. Illo enim necessitatibus saepe porro autem nisi aliquam magni.',
            //     'category_id'=> 2,
            //     'user_id'=>2
            // ]);
            

    }

}

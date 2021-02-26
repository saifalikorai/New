<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([ 
            'name' => 'Jannet Doe', 
            'email' => 'jannet@gmail.com', 
            'password' => bcrypt('12345678'),
            'profile_pic_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRfrQD02C-mWi9jGGbsCU5kkqKmK2ZwK8G4_w&usqp=CAU',
            'description' => 'Lorem Ipsum Dur..',             
        ]);

        $user = User::create([ 
            'name' => 'Jane Doe', 
            'email' => 'jane@gmail.com', 
            'password' => bcrypt('12345678'),
            'profile_pic_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSo7WfE6wFfdpeFph92LdEFJFnula0ecIObiQ&usqp=CAU',
            'description' => 'Lorem Ipsum Dur..',             
        ]);

        $user = User::create([ 
            'name' => 'Mary Doe', 
            'email' => 'mary@gmail.com', 
            'password' => bcrypt('12345678'),
            'profile_pic_path' => 'https://www.w3schools.com/bootstrap4/img_avatar6.png',
            'description' => 'Lorem Ipsum Dur..',             
        ]);

        $user = User::create([ 
            'name' => 'Sara Doe', 
            'email' => 'sara@gmail.com', 
            'password' => bcrypt('12345678'),
            'profile_pic_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQfjhH9JE8PzTw1bAo66ZaAa9JVbj8gCfB2QA&usqp=CAU',
            'description' => 'Lorem Ipsum Dur..',             
        ]);

    }
}

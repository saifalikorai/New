<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Admin::create([ 
            'role_id' => '2',
            'name' => 'Admin', 
            'email' => 'admin@admin.com', 
            'password' => bcrypt('12345678'), 
        ]);

        $user->assignRole('admin');
    }
}

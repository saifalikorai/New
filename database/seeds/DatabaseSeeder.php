<?php

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
        DB::table('roles')->insert([
            'name' => 'guest',
            'guard_name' => 'web',
        ]);

        DB::table('roles')->insert([
            'name' => 'admin',
            'guard_name' => 'admin',
        ]);

        $this->call(UsersTableSeeder::class);

        $this->call(AdminsTableSeeder::class);
    }
}

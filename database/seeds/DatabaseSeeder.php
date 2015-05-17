<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserTableSeeder');
        $this->command->info('User table seeded!');
    }
}

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert(['name' => 'Admin', 'email' => 'admin@admin.com', 'password' => Hash::make('admin')]);
    }
}
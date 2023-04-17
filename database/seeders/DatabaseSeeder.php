<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//add db method
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //raw sql
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        DB::table('posts')->truncate();


        //this is using a factory
         \App\Models\User::factory(10)->create();
         \App\Models\Post::factory(10)->create();
         //this is custom seeder
        //$this->call(UsersTableSeeder::class);
    }
}

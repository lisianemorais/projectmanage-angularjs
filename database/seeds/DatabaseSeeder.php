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

        

         $this->call(UserTableSeeder::class);
         $this->call(ClientTableSeeder::class);
         $this->call(ProjectTableSeeder::class);
         $this->call(NotasProjectTableSeeder::class);

         factory(\projectmanager\Entities\User::class)->create([
            'name' => 'Lisiane',
            'email' => 'lisi.rmorais@gmail.com',
            'password' => bcrypt(123456),
            'remember_token' => str_random(10),
        ]);

        Model::reguard();
    }
}

<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // \projectmanager\Entities\User::truncate();
        factory(\projectmanager\Entities\User::class, 10)->create();
    }
}

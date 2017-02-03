<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\projectmanager\Entities\Clientes::truncate();
        factory(\projectmanager\Entities\Clientes::class, 10)->create();
    }
}

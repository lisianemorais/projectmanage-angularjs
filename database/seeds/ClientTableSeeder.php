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
        \projectmanager\Clientes::truncate();
        factory(\projectmanager\Clientes::class, 5)->create();
    }
}

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
        \projectmanager\Models\Clientes::truncate();
        factory(\projectmanager\Models\Clientes::class, 5)->create();
    }
}

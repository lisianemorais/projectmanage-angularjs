<?php

use Illuminate\Database\Seeder;

class NotasProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\projectmanager\Entities\Clientes::truncate();
        factory(\projectmanager\Entities\NotasProject::class, 10)->create();
    }
}

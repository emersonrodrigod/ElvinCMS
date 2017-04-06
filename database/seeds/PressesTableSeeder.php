<?php

use Illuminate\Database\Seeder;

class PressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $press = factory(App\Press::class,20)->create();
    }
}

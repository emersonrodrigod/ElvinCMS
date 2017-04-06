<?php

use Illuminate\Database\Seeder;

class PopupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $popup = factory(App\Popup::class)->create();
    }
}

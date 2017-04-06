<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faq = factory(App\Faq::class,20)->create();
    }
}

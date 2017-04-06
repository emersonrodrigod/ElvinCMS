<?php

use Illuminate\Database\Seeder;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Slide::class, 5)->create()->each(function ($i) {
	        $i->slide_items()->saveMany(factory(App\SlideItem::class,4)
	        	->create(['slide_id'=> $i->id])
	        	->each(function ($d) {
	                $d->slide_item_details()->save(factory(App\SlideItemDetail::class)
	                	->create(['slide_item_id'=> $d->id]));
	        }));
		});
    }
}

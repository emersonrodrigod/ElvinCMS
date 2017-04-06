<?php

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
		factory(App\Gallery::class, 5)->create()->each(function ($i) {
	        $i->items()->saveMany(factory(App\GalleryItem::class,4)
	        	->create(['gallery_id'=> $i->id])
	        	->each(function ($d) {
	                $d->details()->save(factory(App\GalleryItemDetail::class)
	                	->create(['gallery_item_id'=> $d->id]));
	        }));
		});
    }
}


	
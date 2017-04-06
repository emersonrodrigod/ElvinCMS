<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)->create()->each(function ($i) {
	        $i->posts()->saveMany(factory(App\Post::class,5)
	        	->create(['user_id'=> $i->id])
	        	->each(function ($d) {
	                $d->categories()->saveMany(factory(App\Category::class,2)
	                	->create());
	                $d->tags()->saveMany(factory(App\Tag::class,2)
	                	->create());
	        }));
		});
    }
}

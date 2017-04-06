<?php
/**
 * You can use sql to seeder converter
 * 
 * @link http://laravel.stonelab.ch/sql-seeder-converter/ 
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds. First call SlidesTableSeeser then call others,
     * Because UsersTableSeeder is bound to SlidesTableSeeder!
     * @return void
     */
    public function run()
    {
        $this->call(SettingsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        /*
        $this->call(UsersTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(PressesTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(PopupTableSeeder::class);
        $this->call(GalleriesTableSeeder::class);
        $this->call(SlidesTableSeeder::class);
        */

    }
}

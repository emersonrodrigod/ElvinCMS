<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('roles')->insert([
      'id' => 1,
      'name' => 'developer',
      'display_name' => 'Developer',
      'description' => 'developer',
      'created_at' => NULL, 
      'updated_at' => NULL
    ]);

    DB::table('roles')->insert([
      'id' => 2,
      'name' => 'editor',
      'display_name' => 'Editor',
      'description' => 'editor',
      'created_at' => NULL, 
      'updated_at' => NULL
    ]);

    DB::table('roles')->insert([
      'id' => 3,
      'name' => 'admin',
      'display_name' => 'Admin',
      'description' => 'admin',
      'created_at' => NULL, 
      'updated_at' => NULL
    ]);

    DB::table('roles')->insert([
      'id' => 4,
      'name' => 'user',
      'display_name' => 'User',
      'description' => 'user',
      'created_at' => NULL, 
      'updated_at' => NULL
    ]);
  }
}

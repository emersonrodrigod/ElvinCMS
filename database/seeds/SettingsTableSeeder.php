<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('settings')->insert([
    'id'=>5,
    'group'=>'contact',
    'index'=>'Is_contact_available',
    'value'=>'1',
    'type'=>'booleon'
    ]);
          
    DB::table('settings')->insert([
    'id'=>6,
    'group'=>'contact',
    'index'=>'Email',
    'value'=>'info@guncebektas.com',
    'type'=>'text'
    ]);
          
    DB::table('settings')->insert([
    'id'=>7,
    'group'=>'contact',
    'index'=>'Phone_1',
    'value'=>'5555555556',
    'type'=>'text'
    ]);
          
    DB::table('settings')->insert([
    'id'=>8,
    'group'=>'contact',
    'index'=>'Phone_2',
    'value'=>NULL,
    'type'=>'text'
    ]);
          
    DB::table('settings')->insert([
    'id'=>9,
    'group'=>'contact',
    'index'=>'Phone_3',
    'value'=>NULL,
    'type'=>'text'
    ]);
          
    DB::table('settings')->insert([
    'id'=>10,
    'group'=>'contact',
    'index'=>'Fax',
    'value'=>'6666666666',
    'type'=>'text'
    ]);
          
    DB::table('settings')->insert([
    'id'=>11,
    'group'=>'contact',
    'index'=>'Address',
    'value'=>'example address information',
    'type'=>'text'
    ]);
          
    DB::table('settings')->insert([
    'id'=>12,
    'group'=>'contact',
    'index'=>'City',
    'value'=>'İzmir',
    'type'=>'text'
    ]);
          
    DB::table('settings')->insert([
    'id'=>13,
    'group'=>'contact',
    'index'=>'Country',
    'value'=>'Türkiye',
    'type'=>'text'
    ]);
          
    DB::table('settings')->insert([
    'id'=>14,
    'group'=>'contact',
    'index'=>'Location',
    'value'=>'38.40625379485267,27.147216796875',
    'type'=>'map'
    ]);
          
    DB::table('settings')->insert([
    'id'=>101,
    'group'=>'general',
    'index'=>'Site_name',
    'value'=>'ElvinCMS',
    'type'=>'text'
    ]);
          
    DB::table('settings')->insert([
    'id'=>102,
    'group'=>'general',
    'index'=>'Site_logo',
    'value'=>NULL,
    'type'=>'finder'
    ]);
          
    DB::table('settings')->insert([
    'id'=>103,
    'group'=>'general',
    'index'=>'Maintenance_mode',
    'value'=>'0',
    'type'=>'booleon'
    ]);
          
    DB::table('settings')->insert([
    'id'=>104,
    'group'=>'general',
    'index'=>'Construction_mode',
    'value'=>'0',
    'type'=>'booleon'
    ]);
          
    DB::table('settings')->insert([
    'id'=>105,
    'group'=>'general',
    'index'=>'Multi_language',
    'value'=>'0',
    'type'=>'booleon'
    ]);
          
    DB::table('settings')->insert([
    'id'=>515,
    'group'=>'social',
    'index'=>'Facebook_page',
    'value'=>'#123',
    'type'=>'text'
    ]);
          
    DB::table('settings')->insert([
    'id'=>516,
    'group'=>'social',
    'index'=>'Twitter_page',
    'value'=>'#',
    'type'=>'text'
    ]);
          
    DB::table('settings')->insert([
    'id'=>517,
    'group'=>'social',
    'index'=>'Linkedin_page',
    'value'=>'#',
    'type'=>'text'
    ]);
          
    DB::table('settings')->insert([
    'id'=>518,
    'group'=>'social',
    'index'=>'Google+_page',
    'value'=>'#',
    'type'=>'text'
    ]);
          
    DB::table('settings')->insert([
    'id'=>519,
    'group'=>'social',
    'index'=>'Youtube_page',
    'value'=>'#',
    'type'=>'text'
    ]);
          
    DB::table('settings')->insert([
    'id'=>520,
    'group'=>'social',
    'index'=>'Pinterest_page',
    'value'=>'#',
    'type'=>'text'
    ]);
          
    DB::table('settings')->insert([
    'id'=>521,
    'group'=>'social',
    'index'=>'Instagram_page',
    'value'=>'#',
    'type'=>'text'
    ]);
          
    DB::table('settings')->insert([
    'id'=>522,
    'group'=>'social',
    'index'=>'Freelancer_page',
    'value'=>'#',
    'type'=>'text'
    ]);
          
    DB::table('settings')->insert([
    'id'=>523,
    'group'=>'social',
    'index'=>'Github_page',
    'value'=>'#',
    'type'=>'text'
    ]);
          
    DB::table('settings')->insert([
    'id'=>9000,
    'group'=>'modules',
    'index'=>'Dynamic_string_module',
    'value'=>'1',
    'type'=>'booleon'
    ]);
          
    DB::table('settings')->insert([
    'id'=>9001,
    'group'=>'modules',
    'index'=>'Page_module',
    'value'=>'1',
    'type'=>'booleon'
    ]);
          
    DB::table('settings')->insert([
    'id'=>9002,
    'group'=>'modules',
    'index'=>'Blog_module',
    'value'=>'1',
    'type'=>'booleon'
    ]);
          
    DB::table('settings')->insert([
    'id'=>9003,
    'group'=>'modules',
    'index'=>'Gallery_module',
    'value'=>'1',
    'type'=>'booleon'
    ]);
          
    DB::table('settings')->insert([
    'id'=>9004,
    'group'=>'modules',
    'index'=>'Slide_module',
    'value'=>'1',
    'type'=>'booleon'
    ]);
          
    DB::table('settings')->insert([
    'id'=>9005,
    'group'=>'modules',
    'index'=>'Menu_module',
    'value'=>'0',
    'type'=>'booleon'
    ]);
          
    DB::table('settings')->insert([
    'id'=>9006,
    'group'=>'modules',
    'index'=>'Faq_module',
    'value'=>'1',
    'type'=>'booleon'
    ]);
          
    DB::table('settings')->insert([
    'id'=>9007,
    'group'=>'modules',
    'index'=>'Popup_module',
    'value'=>'1',
    'type'=>'booleon'
    ]);
          
    DB::table('settings')->insert([
    'id'=>9008,
    'group'=>'modules',
    'index'=>'Testimonials_module',
    'value'=>'1',
    'type'=>'booleon'
    ]);
          
    DB::table('settings')->insert([
    'id'=>9009,
    'group'=>'modules',
    'index'=>'Project_module',
    'value'=>'1',
    'type'=>'booleon'
    ]);
          
    DB::table('settings')->insert([
    'id'=>9010,
    'group'=>'modules',
    'index'=>'Event_module',
    'value'=>'1',
    'type'=>'booleon'
    ]);
          
    DB::table('settings')->insert([
    'id'=>9011,
    'group'=>'modules',
    'index'=>'User_module',
    'value'=>'1',
    'type'=>'booleon'
    ]);
          
    DB::table('settings')->insert([
    'id'=>9012,
    'group'=>'modules',
    'index'=>'Press_module',
    'value'=>'1',
    'type'=>'booleon'
    ]);
  }
}

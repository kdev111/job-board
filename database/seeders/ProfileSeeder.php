<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Profile::factory(10)->create();

        $profiles = \App\Models\Profile::get();
 
        foreach ($profiles as $profile) {
            for ($i=0; $i < 3; $i++) { 
                $profile->tags()->attach(\App\Models\Tag::get()->random()->id);
            }
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Company::factory(3)->create();

        $companies = \App\Models\Company::get();
 
        foreach ($companies as $company) {
            for ($i=0; $i < 3; $i++) { 
                $company->tags()->attach(\App\Models\Tag::get()->random()->id);
            }
        }
    }
}

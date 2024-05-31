<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// faker
use Faker\Generator as Faker;
use Illuminate\Support\Str;  
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 15; $i++) {
            $newProject = new Project();
            $newProject->name = $faker->domainName();
            $newProject->slug = Str::slug($newProject->name, '-');
            $newProject->client_name = $faker->company();
            $newProject->summary = $faker->text(500);
            $newProject->save();
        }
    }
}

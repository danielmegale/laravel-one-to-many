<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        for ($i = 1; $i <= 3; $i++) {
            $project = new Project();
            $project->title = $faker->text(20);
            $project->description = $faker->paragraph(15, true);
            // $project->image = $faker->imageUrl(250, 250);
            $project->url = $faker->url();
            $project->save();
        }
    }
}

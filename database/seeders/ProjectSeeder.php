<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 10 ; $i++) { 
            $proj = new Project();

            $proj->name = fake()->words(rand(1,4), true);
            $proj->description = fake()->sentence(rand(10,25), true);
            $proj->category = fake()->randomElement(['Web Design e Sviluppo', 'Applicazioni Mobile', 'Arte e Illustrazione', 'Sviluppo Software']);
            $proj->link = fake()->url();
            $proj->slug = Str::slug($proj->name, '-');

            $proj->save();
        
        }
    }
}

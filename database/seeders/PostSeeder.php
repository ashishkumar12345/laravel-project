<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PostModel;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        PostModel::factory(10)->create();
    }
}

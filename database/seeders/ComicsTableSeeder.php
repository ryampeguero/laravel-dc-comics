<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $data = config('comics');

        foreach ($data as $comic) {
            $newComic = new Comic();
            $newComic->fill($comic);
            $newComic->save();
        }
    }
}

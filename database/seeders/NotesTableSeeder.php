<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // //
        // Note::create([
        //     'title' => "this is a title",
        //     'body' => "this is a body",
        //     'send_date' => now()
        // ]);

        Note::factory(10)->create();
    }
}

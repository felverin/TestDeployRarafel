<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Program::allData() as $program) {
            Program::firstOrCreate(
                ['code' => $program['code']],
                $program
            );
        }

        Program::factory()->create();
    }
}

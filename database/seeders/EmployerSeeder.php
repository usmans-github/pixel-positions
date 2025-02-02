<?php

namespace Database\Seeders;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    use HasFactory;


    public function run(): void
    {
        Employer::factory(10)->create();
    }
}

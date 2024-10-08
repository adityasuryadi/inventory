<?php

use App\Models\Employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DepartementSeeder::class,
            EmployeeSeeder::class,
            ProductSeeder::class,
        ]);
    }
}

<?php


namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Boolean;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee')->insert([
            'name' => Str::random(30),
            'username' => Str::random(30),
            'position' => Str::random(30),
            'phone' => Str::random(30),
            'is_hired' => true,

        ]);
    }
}

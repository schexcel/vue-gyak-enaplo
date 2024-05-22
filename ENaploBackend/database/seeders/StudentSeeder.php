<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $student = new Student();
        $student->name = "Kiss Árpád";
        $student->eduid = "70000000001";
        $student->save();

        $student = new Student();
        $student->name = "Nagy Anna";
        $student->eduid = "70000000002";
        $student->save();
    }
}

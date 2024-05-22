<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grade = new Grade();
        $grade->student_id = Student::where('eduid', "70000000001")->first()->id;
        $grade->grade = 4;
        $grade->weight = 1;
        $grade->comment = "Órai munka";
        $grade->save();

        $grade = new Grade();
        $grade->student_id = Student::where('eduid', "70000000001")->first()->id;
        $grade->grade = 3;
        $grade->weight = 2;
        $grade->comment = "Laravel Témazáró";
        $grade->save();

        $grade = new Grade();
        $grade->student_id = Student::where('eduid', "70000000001")->first()->id;
        $grade->grade = 5;
        $grade->weight = 1;
        $grade->comment = "Felelet";
        $grade->save();

        $grade = new Grade();
        $grade->student_id = Student::where('eduid', "70000000002")->first()->id;
        $grade->grade = 2;
        $grade->weight = 1;
        $grade->comment = "Órai munka";
        $grade->save();

        $grade = new Grade();
        $grade->student_id = Student::where('eduid', "70000000002")->first()->id;
        $grade->grade = 5;
        $grade->weight = 2;
        $grade->comment = "Laravel Témazáró";
        $grade->save();

    }
}

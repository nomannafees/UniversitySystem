<?php

namespace Database\Seeders;

use App\Models\DegreeProgram;
use App\Models\University;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin@123'),
            'role' => 'admin',
        ]);

        //ADD FIRST UNI INFO
        $uni1 = University::create([
            'name' => 'BZU',
            'slug' => 'bzu',
            'admission_info' => '061-9330005',
            'registrar_office' => '061-9330005',
            'phone' => '0619201681',
            'email' => 'info@noman.edu.pk',
            'address' => 'BZU University Lodhran ',
            'city' => 'Lodhran',
            'image' => '1.jpg',

        ]);
        DegreeProgram::create([
            'university_id' => $uni1->id,
            'degree_name' => 'BSC',
            'last_year_merit' => 3.8,
            'chance' => 1,
            'fees' => '18000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni1->id,
            'degree_name' => 'CS',
            'last_year_merit' => 3.6,
            'chance' => 1,
            'fees' => '16000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni1->id,
            'degree_name' => 'MCS',
            'last_year_merit' => 3.5,
            'chance' => 1,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni1->id,
            'degree_name' => 'ADP',
            'last_year_merit' => 3.4,
            'chance' => 1,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni1->id,
            'degree_name' => 'SE',
            'last_year_merit' => 3.2,
            'chance' => 1,
            'fees' => '17000',
        ]);

        DegreeProgram::create([
            'university_id' => $uni1->id,
            'degree_name' => 'BSC',
            'last_year_merit' => 2.8,
            'chance' => 2,
            'fees' => '18000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni1->id,
            'degree_name' => 'CS',
            'last_year_merit' => 2.6,
            'chance' => 2,
            'fees' => '16000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni1->id,
            'degree_name' => 'MCS',
            'last_year_merit' => 2.5,
            'chance' => 2,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni1->id,
            'degree_name' => 'ADP',
            'last_year_merit' => 2.4,
            'chance' => 2,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni1->id,
            'degree_name' => 'SE',
            'last_year_merit' => 2.2,
            'chance' => 2,
            'fees' => '17000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni1->id,
            'degree_name' => 'MBBS',
            'last_year_merit' => 2.2,
            'chance' => 2,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni1->id,
            'degree_name' => 'LAW',
            'last_year_merit' => 2.1,
            'chance' => 2,
            'fees' => '17000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni1->id,
            'degree_name' => 'MBBS',
            'last_year_merit' => 2.2,
            'chance' => 1,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni1->id,
            'degree_name' => 'LAW',
            'last_year_merit' => 2.1,
            'chance' => 1,
            'fees' => '17000',
        ]);


        //ADD SECOND UNI INFO

        $uni2 = University::create([
            'name' => 'COMSATS',
            'slug' => 'comsats',
            'admission_info' => '061-9330005',
            'registrar_office' => '061-9330005',
            'phone' => '0619201681',
            'email' => 'info@noman.edu.pk',
            'address' => 'Comsats University Multan ',
            'city' => 'Multan',
            'image' => '2.jpg',

        ]);
        DegreeProgram::create([
            'university_id' => $uni2->id,
            'degree_name' => 'BSC',
            'last_year_merit' => 3.8,
            'chance' => 1,
            'fees' => '18000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni2->id,
            'degree_name' => 'CS',
            'last_year_merit' => 3.6,
            'chance' => 1,
            'fees' => '16000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni2->id,
            'degree_name' => 'MCS',
            'last_year_merit' => 3.5,
            'chance' => 1,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni2->id,
            'degree_name' => 'ADP',
            'last_year_merit' => 3.4,
            'chance' => 1,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni2->id,
            'degree_name' => 'SE',
            'last_year_merit' => 3.2,
            'chance' => 1,
            'fees' => '17000',
        ]);

        DegreeProgram::create([
            'university_id' => $uni2->id,
            'degree_name' => 'BSC',
            'last_year_merit' => 2.8,
            'chance' => 2,
            'fees' => '18000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni2->id,
            'degree_name' => 'CS',
            'last_year_merit' => 2.6,
            'chance' => 2,
            'fees' => '16000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni2->id,
            'degree_name' => 'MCS',
            'last_year_merit' => 2.5,
            'chance' => 2,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni2->id,
            'degree_name' => 'ADP',
            'last_year_merit' => 2.4,
            'chance' => 2,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni2->id,
            'degree_name' => 'SE',
            'last_year_merit' => 2.2,
            'chance' => 2,
            'fees' => '17000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni2->id,
            'degree_name' => 'MBBS',
            'last_year_merit' => 2.1,
            'chance' => 2,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni2->id,
            'degree_name' => 'LAW',
            'last_year_merit' => 2.0,
            'chance' => 2,
            'fees' => '17000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni2->id,
            'degree_name' => 'MBBS',
            'last_year_merit' => 2.1,
            'chance' => 1,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni2->id,
            'degree_name' => 'LAW',
            'last_year_merit' => 2.0,
            'chance' =>1,
            'fees' => '17000',
        ]);

        //ADD THIRD UNI INFO

        $uni3 = University::create([
            'name' => 'ISLAMIA',
            'slug' => 'islamia',
            'admission_info' => '061-9330005',
            'registrar_office' => '061-9330005',
            'phone' => '0619201681',
            'email' => 'info@noman.edu.pk',
            'address' => 'ISLAMIA University Bahawalpur',
            'city' => 'Bahawalpur',
            'image' => '3.jpg',

        ]);
        DegreeProgram::create([
            'university_id' => $uni3->id,
            'degree_name' => 'BSC',
            'last_year_merit' => 3.8,
            'chance' => 1,
            'fees' => '18000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni3->id,
            'degree_name' => 'CS',
            'last_year_merit' => 3.6,
            'chance' => 1,
            'fees' => '16000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni3->id,
            'degree_name' => 'MCS',
            'last_year_merit' => 3.5,
            'chance' => 1,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni3->id,
            'degree_name' => 'ADP',
            'last_year_merit' => 3.4,
            'chance' => 1,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni3->id,
            'degree_name' => 'SE',
            'last_year_merit' => 3.2,
            'chance' => 1,
            'fees' => '17000',
        ]);

        DegreeProgram::create([
            'university_id' => $uni3->id,
            'degree_name' => 'BSC',
            'last_year_merit' => 2.8,
            'chance' => 2,
            'fees' => '18000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni3->id,
            'degree_name' => 'CS',
            'last_year_merit' => 2.6,
            'chance' => 2,
            'fees' => '16000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni3->id,
            'degree_name' => 'MCS',
            'last_year_merit' => 2.5,
            'chance' => 2,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni3->id,
            'degree_name' => 'ADP',
            'last_year_merit' => 2.4,
            'chance' => 2,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni3->id,
            'degree_name' => 'SE',
            'last_year_merit' => 2.2,
            'chance' => 2,
            'fees' => '17000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni3->id,
            'degree_name' => 'MBBS',
            'last_year_merit' => 2.2,
            'chance' => 2,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni3->id,
            'degree_name' => 'LAW',
            'last_year_merit' => 2.1,
            'chance' => 2,
            'fees' => '17000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni3->id,
            'degree_name' => 'MBBS',
            'last_year_merit' => 2.2,
            'chance' => 1,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni3->id,
            'degree_name' => 'LAW',
            'last_year_merit' => 2.1,
            'chance' => 1,
            'fees' => '17000',
        ]);

        //ADD FOURTH UNI INFO

        $uni4 = University::create([
            'name' => 'RIPHAH',
            'slug' => 'riphah',
            'admission_info' => '061-9330005',
            'registrar_office' => '061-9330005',
            'phone' => '0619201681',
            'email' => 'info@noman.edu.pk',
            'address' => 'RIPHAH University Lahore',
            'city' => 'Lahore',
            'image' => '4.jpg',

        ]);
        DegreeProgram::create([
            'university_id' => $uni4->id,
            'degree_name' => 'BSC',
            'last_year_merit' => 3.8,
            'chance' => 1,
            'fees' => '18000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni4->id,
            'degree_name' => 'CS',
            'last_year_merit' => 3.6,
            'chance' => 1,
            'fees' => '16000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni4->id,
            'degree_name' => 'MCS',
            'last_year_merit' => 3.5,
            'chance' => 1,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni4->id,
            'degree_name' => 'ADP',
            'last_year_merit' => 3.4,
            'chance' => 1,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni4->id,
            'degree_name' => 'SE',
            'last_year_merit' => 3.2,
            'chance' => 1,
            'fees' => '17000',
        ]);

        DegreeProgram::create([
            'university_id' => $uni4->id,
            'degree_name' => 'BSC',
            'last_year_merit' => 2.8,
            'chance' => 2,
            'fees' => '18000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni4->id,
            'degree_name' => 'CS',
            'last_year_merit' => 2.6,
            'chance' => 2,
            'fees' => '16000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni4->id,
            'degree_name' => 'MCS',
            'last_year_merit' => 2.5,
            'chance' => 2,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni4->id,
            'degree_name' => 'ADP',
            'last_year_merit' => 2.4,
            'chance' => 2,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni4->id,
            'degree_name' => 'SE',
            'last_year_merit' => 2.2,
            'chance' => 2,
            'fees' => '17000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni4->id,
            'degree_name' => 'MBBS',
            'last_year_merit' => 2.2,
            'chance' => 2,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni4->id,
            'degree_name' => 'LAW',
            'last_year_merit' => 2.1,
            'chance' => 2,
            'fees' => '17000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni4->id,
            'degree_name' => 'MBBS',
            'last_year_merit' => 2.2,
            'chance' => 1,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni4->id,
            'degree_name' => 'LAW',
            'last_year_merit' => 2.1,
            'chance' => 1,
            'fees' => '17000',
        ]);

        //ADD FIFTH UNI INFO

        $uni5 = University::create([
            'name' => 'FAST',
            'slug' => 'fast',
            'admission_info' => '061-9330005',
            'registrar_office' => '061-9330005',
            'phone' => '0619201681',
            'email' => 'info@noman.edu.pk',
            'address' => 'FAST University Pindi',
            'city' => 'Pindi',
            'image' => '5.jpg',

        ]);
        DegreeProgram::create([
            'university_id' => $uni5->id,
            'degree_name' => 'BSC',
            'last_year_merit' => 3.8,
            'chance' => 1,
            'fees' => '18000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni5->id,
            'degree_name' => 'CS',
            'last_year_merit' => 3.6,
            'chance' => 1,
            'fees' => '16000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni5->id,
            'degree_name' => 'MCS',
            'last_year_merit' => 3.5,
            'chance' => 1,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni5->id,
            'degree_name' => 'ADP',
            'last_year_merit' => 3.4,
            'chance' => 1,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni5->id,
            'degree_name' => 'SE',
            'last_year_merit' => 3.2,
            'chance' => 1,
            'fees' => '17000',
        ]);

        DegreeProgram::create([
            'university_id' => $uni5->id,
            'degree_name' => 'BSC',
            'last_year_merit' => 2.8,
            'chance' => 2,
            'fees' => '18000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni5->id,
            'degree_name' => 'CS',
            'last_year_merit' => 2.6,
            'chance' => 2,
            'fees' => '16000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni5->id,
            'degree_name' => 'MCS',
            'last_year_merit' => 2.5,
            'chance' => 2,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni5->id,
            'degree_name' => 'ADP',
            'last_year_merit' => 2.4,
            'chance' => 2,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni5->id,
            'degree_name' => 'SE',
            'last_year_merit' => 2.2,
            'chance' => 2,
            'fees' => '17000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni5->id,
            'degree_name' => 'MBBS',
            'last_year_merit' => 2.0,
            'chance' => 2,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni5->id,
            'degree_name' => 'LAW',
            'last_year_merit' => 2.1,
            'chance' => 2,
            'fees' => '17000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni5->id,
            'degree_name' => 'MBBS',
            'last_year_merit' => 2.0,
            'chance' => 1,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni5->id,
            'degree_name' => 'LAW',
            'last_year_merit' => 2.1,
            'chance' => 1,
            'fees' => '17000',
        ]);


        //ADD SIXTH UNI INFO

        $uni6 = University::create([
            'name' => 'AIR',
            'slug' => 'air',
            'admission_info' => '061-9330005',
            'registrar_office' => '061-9330005',
            'phone' => '0619201681',
            'email' => 'info@noman.edu.pk',
            'address' => 'AIR University Karachi',
            'city' => 'Karachi',
            'image' => '6.jpg',

        ]);
        DegreeProgram::create([
            'university_id' => $uni6->id,
            'degree_name' => 'BSC',
            'last_year_merit' => 3.8,
            'chance' => 1,
            'fees' => '18000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni6->id,
            'degree_name' => 'CS',
            'last_year_merit' => 3.6,
            'chance' => 1,
            'fees' => '16000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni6->id,
            'degree_name' => 'MCS',
            'last_year_merit' => 3.5,
            'chance' => 1,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni6->id,
            'degree_name' => 'ADP',
            'last_year_merit' => 3.4,
            'chance' => 1,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni6->id,
            'degree_name' => 'SE',
            'last_year_merit' => 3.2,
            'chance' => 1,
            'fees' => '17000',
        ]);

        DegreeProgram::create([
            'university_id' => $uni6->id,
            'degree_name' => 'BSC',
            'last_year_merit' => 2.8,
            'chance' => 2,
            'fees' => '18000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni6->id,
            'degree_name' => 'CS',
            'last_year_merit' => 2.6,
            'chance' => 2,
            'fees' => '16000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni6->id,
            'degree_name' => 'MCS',
            'last_year_merit' => 2.5,
            'chance' => 2,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni6->id,
            'degree_name' => 'ADP',
            'last_year_merit' => 2.4,
            'chance' => 2,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni6->id,
            'degree_name' => 'SE',
            'last_year_merit' => 2.2,
            'chance' => 2,
            'fees' => '17000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni6->id,
            'degree_name' => 'MBBS',
            'last_year_merit' => 2.2,
            'chance' => 2,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni6->id,
            'degree_name' => 'LAW',
            'last_year_merit' => 2.1,
            'chance' => 2,
            'fees' => '17000',
        ]);DegreeProgram::create([
            'university_id' => $uni6->id,
            'degree_name' => 'MBBS',
            'last_year_merit' => 2.2,
            'chance' => 2,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni6->id,
            'degree_name' => 'LAW',
            'last_year_merit' => 2.1,
            'chance' => 2,
            'fees' => '17000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni6->id,
            'degree_name' => 'MBBS',
            'last_year_merit' => 2.2,
            'chance' => 1,
            'fees' => '15000',
        ]);
        DegreeProgram::create([
            'university_id' => $uni6->id,
            'degree_name' => 'LAW',
            'last_year_merit' => 2.1,
            'chance' => 1,
            'fees' => '17000',
        ]);


    }
}

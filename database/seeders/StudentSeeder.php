<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert(array(
            array(
                'nama'      => 'Febryan',
                'telp'      => '082134567098',
                'deskripsi' => 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak.',
            ),
            array(
                'nama'      => 'Alif Algasali',
                'telp'      => '082134567096',
                'deskripsi' => 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak.',
            ),
            array(
                'nama'      => 'Ravael',
                'telp'      => '082134567022',
                'deskripsi' => 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak.',
            ),
            array(
                'nama'      => 'Dimas',
                'telp'      => '082134567045',
                'deskripsi' => 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak.',
            ),
            array(
                'nama'      => 'Hendra',
                'telp'      => '082154567022',
                'deskripsi' => 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak.',
            ),
        ));
    }
}

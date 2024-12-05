<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dosen::create([
            'nama_dosen' => 'Dr. Fikri Budiman, M.Kom',
            // 'slug_dosen' => 'fikri-budiman',
            'npp' => '0686.11.1995.070',
            'email_dosen' => 'fikribudiman@gmail.com',
            'password_dosen' => 'password',
            'role' => 'kaprodi',
        ]);

        Dosen::create([
            'nama_dosen' => 'Edi Sugiarto, S.Kom, M.Kom',
            // 'slug_dosen' => 'edi-sugiarto',
            'npp' => '0686.11.2008.358',

            'email_dosen' => 'edisugiarto@gmail.com',
            'password_dosen' => 'password',
            'role' => 'dosen'
        ]);

        Dosen::create([
            'nama_dosen' => 'Muslih, M.Kom',
            // 'slug_dosen' => 'muslih',
            'npp' => '0686.11.1996.082',

            'email_dosen' => 'muslih@gmail.com',
            'password_dosen' => 'password',
            'role' => 'dosen'
        ]);

        Dosen::create([
            'nama_dosen' => 'Novi Hendriyanto, M.Kom',
            // 'slug_dosen' => 'novi-hendriyanto',
            'npp' => '0686.11.2016.646',

            'email_dosen' => 'novihendriyanto@gmail.com',
            'password_dosen' => 'password',
            'role' => 'dosen'
        ]);

        Dosen::create([
            'nama_dosen' => 'Karis Widyatmoko,S.Si, M.Kom',
            // 'slug_dosen' => 'karis-widyatmoko',
            'npp' => '0686.11.1998.159',

            'email_dosen' => 'kariswidiyatmoko@gmail.com',
            'password_dosen' => 'password',
            'role' => 'dosen'
        ]);

        Dosen::create([
            'nama_dosen' => 'Ibnu Utomo W.M, M.Kom',
            // 'slug_dosen' => 'ibnu-utomo',
            'npp' => '0686.11.2002.310',
            'email_dosen' => 'ibnuutomo@gmail.com',
            'password_dosen' => 'password',
            'role' => 'dosen'
        ]);
    }
}

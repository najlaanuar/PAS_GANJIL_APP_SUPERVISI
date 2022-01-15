<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'nip' => '1',
               'nama' => 'kurikulum',
               'alamat' => 'garut',
               'email' => 'kurikulum@gmail.com',
               'is_admin' => '1',
               'supervisor' => '1',
               'password'=> bcrypt('123456'),
            ],
            [
               'nip' => '2',
               'nama' => 'kepsek',
               'alamat' => 'garut',
               'email' => 'kepsek@gmail.com',
               'is_admin' => '2',
               'password'=> bcrypt('123456'),
            ],
            [
               'nip' => '3',
               'nama' => 'kepseksuper',
               'alamat' => 'garut',
               'email' => 'kepseksuper@gmail.com',
               'is_admin' => '1',
               'supervisor' => '1',
               'password'=> bcrypt('123456'),
            ],
            [
               'nip' => '4',
               'nama' => 'guru',
               'alamat' => 'garut',
               'email' => 'guru@gmail.com',
               'is_admin' => '3',
               'password'=> bcrypt('123456'),
            ],
            [
               'nip' => '5',
               'nama' => 'gurusuper',
               'alamat' => 'garut',
               'email' => 'gurusuper@gmail.com',
               'is_admin' => '3',
               'supervisor' => '1',
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}

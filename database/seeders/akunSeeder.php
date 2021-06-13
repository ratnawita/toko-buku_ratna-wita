<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class akunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nama' => 'wita',
                'alamat' => 'jl.raya',
                'telpon' => '08123456789',
                'status' => '',
                'username' => 'admin',
                'password' => bcrypt('7189admin'),
                'akses' => 'admin',
            ],
        ];

        foreach ($users as $user){
            User::create($user);
        }
    }
}

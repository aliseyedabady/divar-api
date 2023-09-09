<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class defaultAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'full_name' => 'admin',
                'email' => 'admin@jf.com',
                'mobile' => '09367360561',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ]
        );
    }
}

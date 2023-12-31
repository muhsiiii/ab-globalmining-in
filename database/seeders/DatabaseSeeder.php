<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name'=>'superadmin',
            'username'=>'superadmin',
            'password'=>bcrypt('abglobal001122334455'),
            'created_at'=> date('Y-m-d H:i:00'),
            'updated_at'=> date('Y-m-d H:i:00')
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (User::where('admin', true)->count() == 0)
        {
            $user = new User;
            $user->first_name = "Admin";
            $user->last_name = "User";
            $user->email = "admin@email.com";
            $user->password = bcrypt(123456);
            $user->admin = true;
            $user->save();
        }
    }
}

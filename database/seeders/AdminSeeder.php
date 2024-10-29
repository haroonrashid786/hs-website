<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usercheck = User::where('email', 'dev@hashedsystem.com')->first();

        if ($usercheck != null){
            $usercheck->delete();
        }

        $user = new User();
        $user->name = 'Hashed System';
        $user->email = 'dev@hashedsystem.com';
        $user->password = Hash::make('secret');
        $user->is_admin = 1;
        $user->save();
    }
}

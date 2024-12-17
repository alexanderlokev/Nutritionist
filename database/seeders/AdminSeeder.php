<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     public function run()
     {
         Admin::updateOrCreate(
             ['email' => 'admin@example2.com'], // Match by email
             [
                 'name' => 'Admin User', // Provide a value for the name field
                 'password' => Hash::make('password'), // Hash the password
             ]
         );
     }

}

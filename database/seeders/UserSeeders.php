<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Razoan Hosasain',
            'email' => 'razoan@gmail.com',
            'password' => bcrypt(123456789),
            'avater' => 'r.jpg',
         ]);
 
         User::create([
            'name' => 'Razoan',
            'email' => 'razoan1@gmail.com',
            'password' => bcrypt(123456789),
            'avater' => 'r.jpg',
         ]);
 
         foreach(range(1, 15) as $i) {
             User::factory()->create();
         }
     }
    
}

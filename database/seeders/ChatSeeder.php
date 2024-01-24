<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chat;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chat::create([

            'sender_id'  =>1,
            'receiver_id'  =>2,
            'message'     =>'Hi ,How are you?',
        ]);
        Chat::create([

            'sender_id'  =>2,
            'receiver_id'  =>1,
            'message'     =>'I am FIne ?',
        ]);
        Chat::create([

            'sender_id'  =>1,
            'receiver_id'  =>2,
            'message'     =>'Hi ,How are you?',
        ]);
        Chat::create([

            'sender_id'  =>1,
            'receiver_id'  =>2,
            'message'     =>'Hi ,How are you?',
        ]);
    }
}

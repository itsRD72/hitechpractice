<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database\json\user.json');
        $users = collect(json_decode($json));
        $users->each(function($user){
             User::create([
                'user_name' => $user->user_name, 
                'email' => $user->email
             ]);
        });

        // $users = collect(
        //     [
        //     [
        //         'user_name' => 'Darshan',
        //         'email' => 'darshan@gmail.com'
        //     ],
        //     [
        //         'user_name' => 'Dharmik',
        //         'email' => 'dharmik@gmail.com'
        //     ],
        //     [
        //         'user_name' => 'Smit Gohel',
        //         'email' => 'smit@gmail.com'
        //     ],
        // ]
        // );
        // $users->each(function($user){
        //     User::insert($user);
        // });

        // User::create([
        //     'user_name' => 'Raj Chavda',
        //     'email' => 'raj@gmail.com'
        // ]);
    }
}

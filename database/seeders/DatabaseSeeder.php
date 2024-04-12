<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            'uuid' => Str::uuid(),
            'username' => "thomas",
            'email' => "jtenik@taras.modit",
            'phone_number' => "0606060606",
            'adress' => "dtc",
            'password' => Hash::make('password'),
            'artisan' => 1,
            'remember_token' => Str::random(10),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'uuid' => Str::uuid(),
            'username' => "Satan",
            'email' => "viens@onest.bien",
            'phone_number' => "0666666666",
            'adress' => "tmtc",
            'password' => Hash::make('password'),
            'artisan' => 1,
            'remember_token' => Str::random(10),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'uuid' => Str::uuid(),
            'username' => "Iblis",
            'email' => "personne@meconnais.jpp",
            'phone_number' => "0606060606",
            'adress' => "jsp",
            'password' => Hash::make('password'),
            'artisan' => 0,
            'remember_token' => Str::random(10),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'uuid' => Str::uuid(),
            'username' => "Cerbère",
            'email' => "goodboy@doggo.waf",
            'phone_number' => "0606060606",
            'adress' => "la niche à coté de la porte",
            'password' => Hash::make('password'),
            'artisan' => 1,
            'remember_token' => Str::random(10),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'uuid' => Str::uuid(),
            'username' => "Charon",
            'email' => "10bal@uber.tqt",
            'phone_number' => "0606060606",
            'adress' => "dans ma super auto tah lamborghini",
            'password' => Hash::make('password'),
            'artisan' => 1,
            'remember_token' => Str::random(10),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        $this->call(ProductSeeder::class);

    }
}

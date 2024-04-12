<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('products')->insert([
            'uuid' => Str::uuid(),
            'artisan_uuid' => User::where('username', 'thomas')->first()->uuid,
            'designation' => "Boucle d'oreille en forme de ZOB",
            'description' => "Boucle d'oreille en forme de gros ZOB",
            'price' => 69.69,
            'image' => "https://cdn.deguisetoi.fr/images/rep_art/pet/204/9/204955/boucles-d-oreilles-coquine-adulte_204955.jpg",
            "category" => "Bijoux",
            'materials' => "plastique",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'uuid' => Str::uuid(),
            'artisan_uuid' => User::where('username', 'Satan')->first()->uuid,
            'designation' => "laravel",
            'description' => "UN SUPER MODULE LARAVEL EN GROUPE",
            'price' => 0,
            'image' => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/800px-Laravel.svg.png",
            "category" => "Fist",
            'materials' => "Vous",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'uuid' => Str::uuid(),
            'artisan_uuid' => User::where('username', 'Iblis')->first()->uuid,
            'designation' => "photo de moi",
            'description' => "Je vous jure j'existe",
            'price' => 1.1,
            'image' => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Iblis_%28The_Shahnama_of_Shah_Tahmasp%29.png/170px-Iblis_%28The_Shahnama_of_Shah_Tahmasp%29.png",
            "category" => "Art",
            'materials' => "Toile, peinture",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'uuid' => Str::uuid(),
            'artisan_uuid' => User::where('username', 'Cerbère')->first()->uuid,
            'designation' => "Mon ancienne baballe",
            'description' => "On se marrais bien mais la nouvelle est mieux",
            'price' => 69.69,
            'image' => "https://cdn.deguisetoi.fr/images/rep_art/gra/222/6/222678/fausse-grenade-sonore-militaire-en-plastique_222678_1.jpg",
            "category" => "Bijoux",
            'materials' => "plastique",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'uuid' => Str::uuid(),
            'artisan_uuid' => User::where('username', 'Charon')->first()->uuid,
            'designation' => "Croisière sympa",
            'description' => "Apportez vos maillots !",
            'price' => 10000000,
            'image' => "https://ih1.redbubble.net/image.4586649415.9291/fposter,small,wall_texture,product,750x1000.jpg",
            "category" => "Voyage",
            'materials' => "Vous",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}

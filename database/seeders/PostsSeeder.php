<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;


class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
    {
        $usuarios = User::all();

        $usuarios->each(function ($usuario) {
            Post::factory()->count(3)->create([
                'usuario_id' => $usuario->id
            ]);
        });
    }
}

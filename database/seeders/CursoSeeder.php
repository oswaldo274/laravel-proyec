<?php

namespace Database\Seeders;
use App\Models\curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso=new curso();
        $curso->nombre='laravel';
        $curso->descripcion='el mejor framwork de php';
        $curso->categoria='desarrollo web';
        $curso->save();

        $curso1=new curso();
        $curso1->nombre='laravel';
        $curso1->descripcion='el mejor framwork de php';
        $curso1->categoria='desarrollo web';
        $curso1->save();

        $curso2=new curso();
        $curso2->nombre='laravel';
        $curso2->descripcion='el mejor framwork de php';
        $curso2->categoria='desarrollo web';
        $curso2->save();
    }
}

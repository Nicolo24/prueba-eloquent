<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $padre = new \App\Models\padre(
            [
                'nombre'=>'Juan',
                'apellido'=>'Perez'            
            ]
        );
        $padre->save();

        $hijo1 = new \App\Models\hijo(
            [
                'nombre'=>'Nicolas',
                'padre_id'=>$padre->id
            ]
        );
        $hijo1->save();

        $hijo2 = new \App\Models\hijo(
            [
                'nombre'=>'Fernando',
                'padre_id'=>$padre->id
            ]
        );
        $hijo2->save();

    }
}

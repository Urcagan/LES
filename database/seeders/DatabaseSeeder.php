<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Complex;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $complexArr = [
            [
                'NameComplex' => 'КТУ ГПВГ',
                'Description'=> 'Комплекс технологических установок глубокой переработки вакуумного газоиля',
            ],
            [
                'NameComplex' => 'КТУ ППН',
                'Description'=> 'Комплекс технологических установок первичной переработки нефти',
            ],
            [
                'NameComplex' => 'КТУ ПГиБ',
                'Description'=> 'Комплекс технологических установок переработки газов и бензинов',
            ],
            [
                'NameComplex' => 'КТУ КРиИБФ',
                'Description'=> 'Комплекс технологических установок каталитического риформинга и изомеризации бензиновых фракций',
            ]

        ];

        foreach ($complexArr as $item) {
            Complex::create($item);
        }

    }
}

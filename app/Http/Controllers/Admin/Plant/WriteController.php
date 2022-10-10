<?php

namespace App\Http\Controllers\Admin\Plant;

use App\Http\Controllers\Controller;
use App\Models\Plant;


class WriteController extends Controller{

    public function __invoke()
    {
        dump('Заполнение таблици Complexes');
        $plantsArr = [
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

        foreach ($plantsArr as $item){
            dump($item);
            Plant::create($item);
        }
        return redirect()->route('admin.plant.index');
    }
}

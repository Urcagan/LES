<?php

namespace App\Http\Controllers\Complex;

use App\Http\Controllers\Controller;
use App\Models\Complex;


class WriteController extends Controller
{
    public function __invoke()
    {
        dump('Заполнение таблици Complexes');
        $complexesArr = [
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

        foreach ($complexesArr as $item){
            dump($item);
            Complex::create($item);
        }
        return redirect()->route('complexes.index');
    }

}

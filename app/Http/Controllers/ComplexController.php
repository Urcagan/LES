<?php

namespace App\Http\Controllers;

use App\Models\Complex;
use Illuminate\Http\Request;


class ComplexController extends Controller
{
    public function index(){
        $complexes = Complex::all();
        return view('complexes', compact('complexes'));

//        var_dump('Страница вывода таблицы Complex');
//        dump('Страница вывода таблицы Complex');
//        $complex = Complex::find(4);
//        dd($complex);

    }

    public function create(){
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

        return ('Complex create');
    }

    public function update(){
        $complex = Complex::find(4);
        $complex->update([
            'Description' => 'update',
        ]);
        dd($complex);
    }

    public function delete()
    {
       $complex = Complex::find(4);
       $complex->delete();
       dd('deleted');
    }
}

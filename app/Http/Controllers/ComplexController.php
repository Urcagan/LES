<?php

namespace App\Http\Controllers;

use App\Models\Complex;
use Illuminate\Http\Request;


class ComplexController extends Controller
{
    public function index(){
        $complex = Complex::find(1);
        dd($complex);
        
    }

    public function create(){
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
        return ('Complexes create');
    }
}

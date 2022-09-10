<?php

namespace App\Http\Controllers;

use App\Models\Complex;
use App\Models\Plant;
use Illuminate\Http\Request;


class ComplexController extends Controller{

    public function index(){
        $complexes = Complex::all();
        return view('complex.index', compact('complexes'));

//        var_dump('Страница вывода таблицы Complex');
//        dump('Страница вывода таблицы Complex');
//        $complex = Complex::find(4);
//        dd($complex);

    }

    public function create(){
        return view( 'complex.create');
    }

    public function store(){
        $data = request()->validate([
            'NameComplex' => 'required | string',
            'Description' => 'nullable | string',
        ]);
        Complex::create($data);
        return redirect()->route('complexes.index');
    }

    public function show(Complex $complex)
    {
        $plants = $complex->plants;

       //$plants = Plant::where('complex_id', $complex->id)->get();
       // dd($plants);

        return view('complex.show', compact('complex', 'plants'));

    }

    public function edit (Complex $complex)
    {
        return view('complex.edit', compact('complex'));
    }

    public function update(Complex $complex){

        $data = request()->validate([
            'NameComplex' => 'string',
            'Description' => 'string',
        ]);
        @$complex->update($data);
        return redirect()->route('complexes.show', $complex->id);
    }

    public function destroy(Complex $complex)
    {
        $complex->delete();
        return redirect()->route('complexes.index');
    }

    public function delete()
    {
       $complex = Complex::find(4);
       $complex->delete();
       dd('deleted');
    }

    public function create_man(){
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
